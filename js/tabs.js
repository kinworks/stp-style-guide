var helper = (function(win, doc, undefined) {

	return {
		// Cross browser events
		add_event: function(el, ev, fn) {console.log(el,ev,fn);
			'addEventListener' in win ? 
				el.addEventListener(ev, fn, false) : 
				el.attachEvent('on' + ev, fn);
		},

		// Faster class selectors
		// http://jsperf.com/queryselector-vs-getelementsbyclassname-0
		get_single_by_class: function(className) {
			return 'getElementsByClassName' in doc ? 
				doc.getElementsByClassName(className)[0] : 
				doc.querySelector('.' + className);
		},

		//http://jsperf.com/byclassname-vs-queryselectorall
		get_many_by_class: function(className) {
			return 'getElementsByClassName' in doc ? 
				doc.getElementsByClassName(className) : 
				doc.querySelectorAll('.' + className);
		}
	};

})(this, this.document);

(function(win, doc, undefined) {
	'use strict';

	// Quick feature test
	if('querySelector' in doc) {

		var tabs = function() {

			/* Feature detect for localStorage courtesy of 
			   http://mathiasbynens.be/notes/localstorage-pattern
			   ========================================================================== */

			var storage,
				fail,
				uid;

			try {
				uid = new Date;
				(storage = win.localStorage).setItem(uid, uid);
				fail = storage.getItem(uid) != uid;
				storage.removeItem(uid);
				fail && (storage = false);
			} catch(e) {}



			/* DOM nodes we'll need
			   ========================================================================== */

			var wrapper = helper.get_single_by_class('js-tab-ui'),
			  tabs = helper.get_many_by_class('js-tabs-list'),
				panels = helper.get_many_by_class('js-panel'),
				tab_names = helper.get_many_by_class('js-panel__title'),
				i,
				panel_count = panels.length;



			/* Show hide the panels, update the tabs' attributes
			   ========================================================================== */

			var show_hide = function(x_id) {
				for(i=0; i<panel_count; i++) {
					// display the correct panel, hide the others
					if(panels[i].getAttribute('aria-labelledby') === x_id) {
						panels[i].style.display = 'block';
					} else {
						panels[i].style.display = 'none';
					}

					// update the ARIA
					if(items[i].id === x_id) {
						items[i].setAttribute('aria-selected', 'true');
					} else {
						items[i].setAttribute('aria-selected', 'false');
					}
				}

				// put the tab id into localStorage
				if(storage) {
					localStorage['tab'] = x_id;
				}
			}



			/* When a tab has been clicked
			   ========================================================================== */

			var clicked = function(event) {
				var clicked_element;

				clicked_element = event.target || event.srcElement;

				if(clicked_element.nodeName.toLowerCase() === 'li') {
					show_hide(clicked_element.id);
				} else {
					return; // stop clicks on the <ul> hiding everything
				}

			};



			/* Keyboard interaction
			   ========================================================================== */
			var kbd = function(event) {
				var focused_element,
					key_code,
					next,
					prev;

				event = event || win.event;

				key_code = event.keyCode || event.which;

				focused_element = event.target || event.srcElement;

				// up or right arrow key moves focus to the next tab
				if(key_code === 38 || key_code === 39) {
					next = focused_element.nextSibling;

					// make sure we're on an element node
					if(next.nodeType !== 1) {
						next = next.nextSibling;
					}

					next.setAttribute('tabindex', 0);
					next.focus();
				}

				// left or down arrow key moves focus to the previous tab
				if(key_code === 37 || key_code === 40) {
					prev = focused_element.previousSibling;

					// make sure we're on an element node
					if(prev.nodeType !== 1) {
						prev = prev.previousSibling;
					}

					prev.setAttribute('tabindex', 0);
					prev.focus();
				}

				// space bar
				if(key_code === 32) {
					show_hide(focused_element.id);
				}

				// Prevent space bar moving the page down
				event.preventDefault ? event.preventDefault() : event.returnValue = false;
			}



			/* Event listeners
			   ========================================================================== */

			helper.add_event(tabs, 'click', clicked);
			helper.add_event(tabs, 'keydown', kbd);



			/* If a tab id is in localStorage open the corresponding panel
			   ========================================================================== */

			if(storage && localStorage['tab']) {
				show_hide(localStorage['tab']);
			}
		};

		// Make all that happen
		tabs();

	} else {
		return;
	}
})(this, this.document);
var helper = (function(win, doc, undefined) {

	return {
		// Cross browser events
		add_event: function(el, ev, fn) {
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



			/* DOM nodes we'll need
			   ========================================================================== */

			var wrapper = helper.get_single_by_class('js-tab-ui'),
				panels = helper.get_many_by_class('js-panel'),
				tab_names = helper.get_many_by_class('js-panel__title'),
				i,
				panel_count = panels.length,
				container = document.getElementById('js-binder');



			/* Show hide the panels, update the tabs' attributes
			   ========================================================================== */

			var show_hide = function(el) {
				for(i=0; i<panel_count; i++) {
					// display the correct panel, hide the others
					if(panels[i].getAttribute('aria-labelledby') === el.id) {
						panels[i].style.display = 'block';
					} else if(panels[i].getAttribute('data-tabgroup') === el.getAttribute('data-tabgroup')) {
						panels[i].style.display = 'none';
					}
				}
				
				// update the ARIA
				var parent = el.parentNode,
				    children = parent.children;
				    
				for(i=0; i<children.length; i++) {
  				children[i].setAttribute('aria-selected', 'false');
				}
				
				el.setAttribute('aria-selected','true');

				// put the tab id into localStorage
				if(storage) {
					localStorage['tab'] = el.id;
				}
			}



			/* When a tab has been clicked
			   ========================================================================== */

			var clicked = function(event) {
				var clicked_element;

				clicked_element = event.target || event.srcElement;

				if(clicked_element.nodeName.toLowerCase() === 'li') {
					show_hide(clicked_element);
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
					show_hide(focused_element);
				}

				// Prevent space bar moving the page down
				event.preventDefault ? event.preventDefault() : event.returnValue = false;
			}



			/* Event listeners
			   ========================================================================== */

			helper.add_event(container, 'click', clicked);
			helper.add_event(container, 'keydown', kbd);
		};

		// Make all that happen
		tabs();

	} else {
		return;
	}
})(this, this.document);
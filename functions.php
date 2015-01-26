<?php 
  // Get the current branch from Git

  /*  $stringfromfile = file('.git/HEAD', FILE_USE_INCLUDE_PATH);

    $firstLine = $stringfromfile[0]; //get the string from the array

    $explodedstring = explode("/", $firstLine, 3); //seperate out by the "/" in the string

    $branchname = $explodedstring[2]; //get the one that is always the branch name */
?>

<?php 
  
  $tags = `git describe --tags`;
  
  echo $tags;
  
  $parts = explode("-",$tags); 
  //break the string up around the "/" character in $mystring 
  
  $tagname = $parts['0']; 
  //grab the first part 

?>
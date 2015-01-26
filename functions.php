<?php 
  // Get the current branch from Git

  /*  $stringfromfile = file('.git/HEAD', FILE_USE_INCLUDE_PATH);

    $firstLine = $stringfromfile[0]; //get the string from the array

    $explodedstring = explode("/", $firstLine, 3); //seperate out by the "/" in the string

    $branchname = $explodedstring[2]; //get the one that is always the branch name */
?>

<?php 
  
  $stringfromfile = file('.git/packed-refs', FILE_USE_INCLUDE_PATH);

  echo $stringfromfile[2];


  $branchname = foo;

?>
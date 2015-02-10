<?php
 $title = filer_input(INPPUT_POST, "title", FILTER_SANITIZE_STRING);
 $post = filter_input(INPUT_POST,  "post", FILTER_SANITIZE_STRING);
 
 echo "<p>Title: $title</p>";
 eho "<p>Post: $post</p>";
 
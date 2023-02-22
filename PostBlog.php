<!-- These are the other sections of the web application that are linked to the blogs
view web page such are the theme,side bar and footer-->
<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/sidebar.php'; ?>
<?php include 'session.php'; ?>


   
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.css" />

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/monokai-sublime.min.css" />

<link rel="stylesheet" href="//cdn.quilljs.com/1.3.6/quill.snow.css" />

<style>
  body > #standalone-container {
    margin: 50px auto;
    max-width: 720px;
  }
  #editor-container {
    height: 350px;
  }
</style>
<!-- Main Quill library -->
<script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>



<!--Page interface code -->
<div class="w3-main w3-white" style="font-family:Arial;margin-left:300px;margin-top:43px;">

  
  <header class="w3-container" style="padding-top:22px">
    <h3><b><i class="fa fa-newspaper-o"></i> Blog</b></h3>
  </header>
 
 
 <div class="w3-container" style="padding-top:22px">
 <div class="w3-row">
 	<h2>New Blog</h2>   
    
     
<form method="post">
<div class="form-group">
	 <label class="control-label">Blog Title</label>
	 <input type="text" id="title" name="title" class="form-control" required >
	</div>
<div id="editor-container" style="margin-bottom:20px">
</div>
<input type="hidden" name="blogpost" id="blogpost">
<button class="btn btn-primary">Clear</button>
<div align="right" style="position:relative;"><button  name="post" id="post" class="popup btn btn-success btn-lg" style="margin:20px;right:0">POST </button>
<button name="cancel" class="btn btn-danger btn-lg" id="cancel">Cancel</button>
</form>
</div>
<br>
 </div>
</div>
<?php
   if(isset($_POST['post'])){
      // echo '<h2>'.$_POST['blogpost'].'</h2>';
      $title = $_POST['title'];
      $text = $_POST['blogpost'];
      $datePosted = date('Y-m-d');
      $user = $_SESSION['id'];
      $dateFormat = '%Y-%m-%d';

      if(empty($text)){
          //echo 'EMPTY!';
          //echo $datePosted;
      }
      else{
         // echo 'touched'.$text;
         // $insert = $db->query("INSERT INTO blogdata(blText, blTitle, blDate,userId) VALUES('.$text', '.$title', '.$datePosted', '.$user') ");
         $insert = $db->prepare("INSERT INTO blogdata(blText, blTitle, blDate,userId) VALUES(:blog, :title,'$datePosted', '$user') ");
         $insert->bindParam(':blog',$text);
         $insert->bindParam(':title', $title);
         $insert->execute();
         header('location:BlogsView.php');
      }
   }

   if(isset($_POST['cancel'])){
       header('location:BlogsView');
   }

?>

</div>
<script>
var editor = $('#editor-container')

var el = document.getElementById("blogpost");
var t = document.getElementById("title");

t.focus();
//var quill = new Quill('#editor-container', {
var quill = new Quill('#editor-container', {

  modules: {
    toolbar: [
      [{ header: [1, 2, false] }],
      ['bold', 'italic', 'underline'],
      ['image']
    ]
  },
  placeholder: 'Start typing...',
  theme: 'snow'  // or 'bubble'
});
/*
$('#post').on('click', () => { 
    // Get HTML content
    var html = quill.root.innerHTML;

    // Copy HTML content in hidden form
    $('#blogpost').val( html )

    // Post form
    myForm.submit();
})*/

// get html content 

quill.getHTML = () => {
  return quill.root.innerHTML;
};

quill.on('text-change', () => {
    el.value = quill.getHTML();
   // console.log('get html', quill.getHTML());
});

$('#clear').on('click', () => {
    el.value ="";
    t.value = "";
});

$('#post').on('click', () =>{
    if(quill.getText().trim().length === 0){
        el.value ="";
        alert("Cannot post an empty blog. You must have something to share, otherwise CANCEL.");
    }
});

$('#cancel').on('click',()=>{
    if(el.value.length > 0 || t.value.length > 0){
       if(confirm("Are you sure you want to cancel?")){
           window.location.replace("/BlogsView.php");
       }
     }

     else{
         window.location.replace("/BlogsView.php");
     }
});

function titleRequired(){
   alert('Please enter blog title');
}
</script>

<?php include 'theme/foot.php'; ?>
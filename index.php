<?php 
if(isset($_REQUEST['page'])){
      $page = $_REQUEST['page'];
   }else{
      $page ="nopage";
   }
   
  $file = "data/" . $page;
 if(isset($_REQUEST['contents'])){
      $contents = $_REQUEST['contents'];
   }else{
      $contents =false;
   }
 
  if($contents) {
    file_put_contents($file, $contents);
    echo "saved";
    exit;
  }else{
    if(file_exists($file)){
     $contents = file_get_contents($file);
     }else{
     $contents="";
     }
  }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <script type='text/javascript'>var _sf_startpt=(new Date()).getTime()</script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="A piece of paper in the cloud." />
    <link rel="shortcut icon" type="image/gif" href="favicon.gif" />
    <title>Open NotePad</title>
    <meta name="description" content="NotePad" />
    <link rel="stylesheet" href="master.css" type="text/css" media="screen" charset="utf-8" />
    <link rel="stylesheet" href="print.css" type="text/css" media="print" charset="utf-8" />
        
        <script src="prototype.js" type="text/javascript"></script>
    <script type="text/javascript" charset="utf-8">
        var assets_version = 5;
        var is_iphone_os = false;
        
        var pad_name = '<?php echo $page; ?>';
        
        var disable_autosave = false;
        var read_only_mode   = false;
        
        var caret_position  = 0;
        var scroll_position = 0;
    </script>
    <script type="text/javascript" src="application.js"></script>
        
    <!-- e:n -->
</head>
<body id="body">
   
    <div class="stack ">
    <div class="layer_1">
        <div class="layer_2">
            <div class="layer_3">
             <textarea name="contents" id="contents" class="contents " spellcheck="true"><?php echo htmlspecialchars($contents); ?></textarea>
                            </div>
        </div>
    </div>
</div>

    <div id="printable_contents" class="contents "></div>
    
    <div id="unsaved" style="display:none;"></div>
    <div id="loading" style="display:none;"></div>
 

</body>
</html>

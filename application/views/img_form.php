<script type="text/javascript" src="http://s3.hicloud.net.tw/zuvio.public/public/system/plugin/jquery-1.9.1.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.1/jquery.form.min.js"></script>



<script>
     // wait for the DOM to be loaded
     $(function() {
       // bind 'myForm' and provide a simple callback function
       $('#myForm').ajaxForm(function(data) {
           console.log(data);
       });
     });
   </script>


<form id='myForm' action="https://forum.zuvio.com.tw/api/media/img_form" method="post" enctype="multipart/form-data">
    Select image to upload:
    user_id:<input type="text" name="user_id" /><br/>
    api_token:<input type="text" name="api_token" /><br/>
    <input type="file" name="image" id="fileToUpload"><br/>
    <input type="submit" value="Upload Image" name="submit">
</form>

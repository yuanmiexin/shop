$(function() {
    //alert(SCOPE.uploadify_swf)
    $("#file_upload").uploadify({
        //alert:alert('dfadf'),
        'swf'          :SCOPE.uploadify_swf,
        'uploader'     : SCOPE.image_upload,
        'buttonText' : '上传图片',
        'fileTypeDesc' : 'Image Files',
        'fileObjName'     : 'file',
        'fileTypeExts' : '*.gif; *.jpg; *.png',
        'onUploadSuccess' : function(file,data,response) {
            console.log(file);
           /* if(response)
            {
                var obj = JSON.parse(data);
                $("#upload_org_code_img").attr("src",obj.data);
                $("#file_upload_image").attr("value",obj.data);
                $("#upload_org_code_img").show();
            }*/
        }

    });
});
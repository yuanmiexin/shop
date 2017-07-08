/**
 * Created by Administrator on 2017/6/23.
 */
$(function()
{
    $("#file_upload").uploadify({
        'swf'              :SCOPE.uploadify_swf,
        'uploader'         :SCOPE.image_upload,
        'buttonText'      : '上传图片',
        'fileTypeDesc'    : 'Image files',
        'fileObjName'     : 'file',
        'fileTypeExts'    : '*.gif; *.jpg; *.png',
        'onUploadSuccess' : function(file, data, response) {
            if(response)
            {
                $("#upload_org_code_img").attr("src",data);
                $("#file_upload_image").attr("value",data);
                $("#upload_org_code_img").show();
            }
        }
    });

    $("#file_upload_other").uploadify({
        'swf'              :SCOPE.uploadify_swf,
        'uploader'         :SCOPE.image_upload,
        'buttonText'      : '上传图片',
        'fileTypeDesc'    : 'Image files',
        'fileObjName'     : 'file',
        'fileTypeExts'    : '*.gif; *.jpg; *.png',
        'onUploadSuccess' : function(file, data, response) {
            if(response)
            {
                $("#upload_org_code_img_other").attr("src",data);
                $("#file_upload_image_other").attr("value",data);
                $("#upload_org_code_img_other").show();
            }
        }
    });
    })




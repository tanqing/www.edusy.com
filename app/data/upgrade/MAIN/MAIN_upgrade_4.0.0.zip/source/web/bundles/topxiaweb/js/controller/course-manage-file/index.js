define(function(require, exports, module) {

    exports.run = function() {
        require('../course-manage/header').run();

        var $panel = $('#file-manage-panel');
	    require('../../util/batch-select')($panel);
	    require('../../util/batch-delete')($panel);

        $panel.on('click', '.convert-file-btn', function(){
            $.post($(this).data('url'), function(response) {
                if (response.status == 'error') {
                    alert(response.message);
                } else {
                    window.location.reload();
                }
            }, 'json').fail(function(){
                alert('文件转换提交失败，请重试！');
            });
        });

        $("#modal").modal({
            backdrop: 'static',
            keyboard: false,
            show: false
        });

        $("#modal").on("hidden.bs.modal", function(){
            window.location.reload();
        })

        $("button", ".panel-heading").on('click',function(){
            var url="";
            if($(this).data("storage")!='cloud' || typeof(FileReader)=="undefined" || typeof(XMLHttpRequest)=="undefined"){
                url = $(this).data("normalUrl");
            } else {
                url = $(this).data("html5Url");
            }
            $("#modal").html('');
            $("#modal").modal('show');
            $.get(url, function(html){
                $("#modal").html(html);
            });
        })



    };

});
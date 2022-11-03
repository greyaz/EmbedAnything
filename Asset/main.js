(function($){
    if ($){
        $(document).ready(function(){
            if ($("#embed-anything").length == 1){
                var position = $("#embed-anything").position();
                var top = position.left + position.top + "px";
                $("#embed-anything").attr("style", "height:calc(100vh - "+top+");");
            }
        });
    }
})(typeof jQuery == "undefined" ? null: jQuery);

$((function(){$(document).on("keyup","#store_order_prefix",(function(e){$(e.currentTarget).val()?$(".sample-order-code-prefix").text($(e.currentTarget).val()+"-"):$(".sample-order-code-prefix").text("")})),$(document).on("keyup","#store_order_suffix",(function(e){$(e.currentTarget).val()?$(".sample-order-code-suffix").text("-"+$(e.currentTarget).val()):$(".sample-order-code-suffix").text("")})),$(".trigger-input-option").on("change",(function(){var e=$($(this).data("setting-container"));"1"==$(this).val()?(e.removeClass("d-none"),Botble.initResources()):e.addClass("d-none")}))}));
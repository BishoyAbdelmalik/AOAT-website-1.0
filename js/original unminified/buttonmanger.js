$(document).ready(function() {
                var load = $(".sidebtn")[0].getAttribute("value");
                $(load).addClass("visable");
                $(load).addClass("fadeIn");
                $(load).addClass("animated");
            });
            $(".sidebtn").click(function() {
                var v = $(this).attr("value");
                for (i = 0; i < $(".sidebtn").length; i++) {

                    var h = $(".sidebtn")[i].getAttribute("value");
                    if (h != v) {
                        $(h).removeClass("visable");
                        $(h).removeClass("fadeIn");
                        $(h).removeClass("animated");

                    }

                }
                $(v).addClass("visable");
                $(v).addClass("fadeIn");
                $(v).addClass("animated");

            });
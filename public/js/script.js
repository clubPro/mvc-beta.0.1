$(document).ready(function () {
        Waves.attach('.menu_left ul.sidebar-menu > li > a', ['waves-block']);
        Waves.attach('.menu_left ul.sidebar-menu > li > ul > li > a', ['waves-block']);
        Waves.attach('.dropdown-menu li a', ['waves-block']);
        Waves.init();
        var x = 1;
        $(".sub-menu").click(function () {
            $(this).children("ul.sub").toggle();
        });
    }
)


<footer class="text-center">
    <div class="mb-2">
        <small>
            © 2020 made with <i class="fa fa-heart" style="color:red"></i> by - <a target="_blank"
                rel="noopener noreferrer" href="https://azouaoui.netlify.com">
                Mohamed Azouaoui
            </a>
        </small>
    </div>
    <div>
        <a href="https://github.com/azouaoui-med" target="_blank">
            <img alt="GitHub followers"
                src="https://img.shields.io/github/followers/azouaoui-med?label=github&style=social" />
        </a>
        <a href="https://twitter.com/azouaoui_med" target="_blank">
            <img alt="Twitter Follow"
                src="https://img.shields.io/twitter/follow/azouaoui_med?label=twitter&style=social" />
        </a>
    </div>
</footer>


<script>
    jQuery(function ($) {

$(".sidebar-dropdown > a").click(function() {
$(".sidebar-submenu").slideUp(200);
if (
$(this)
  .parent()
  .hasClass("active")
) {
$(".sidebar-dropdown").removeClass("active");
$(this)
  .parent()
  .removeClass("active");
} else {
$(".sidebar-dropdown").removeClass("active");
$(this)
  .next(".sidebar-submenu")
  .slideDown(200);
$(this)
  .parent()
  .addClass("active");
}
});

$("#close-sidebar").click(function() {
$(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
$(".page-wrapper").addClass("toggled");
});




});
</script>

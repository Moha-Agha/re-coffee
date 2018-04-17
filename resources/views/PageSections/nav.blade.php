
<nav class="flex bg-yellow items-center justify-between flex-wrap bg-yallow-dark p-6 " >
  <div class="flex items-center flex-no-shrink text-white mr-6"> 
    <img src="img/Coffee-Logo.svg" class="h-18 w-18">
  </div>
  <div class="block ">
    <button class="flex items-center px-3 py-2  rounded text-red-Darkest hover:text-white ">
    	<!-- Use any element to open the sidenav -->
      <img src="img/menu.svg" class="h-10 w-10" onclick="openNav()">
    </button>
  </div>
</nav>


<div id="mySidenav" class="h-full w-1 fixed z-40 pin-t pin-r bg-black overflow-hidden ">
  <buttonhref="javascript:void(0)" class="closebtn text-white text-4xl" onclick="closeNav()">&times;</button> 
  <br>
  <a href="#">page</a>
 <a href="#">page</a>
</div>


<div class="text-grey font-bold p-6 ">10.04.2018</div>



<script type="text/javascript">
	
	/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "50%";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

</script>
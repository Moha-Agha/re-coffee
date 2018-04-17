<div class="mb-8 mx-4 relative pt-4 min-h-32 ">
<div class="bg-yellow rounded-full px-6 py-6 h-32 z-20 absolute w-full">

<div class="flex ">

  <div class="w-1/5 relative">
  	{{-- if First --}}
	<img class="absolute -mt-8 z-40 h-448 ml-1 " src="img/erster.png">
	<!-- End if ferst -->
  </div>

  <div class="w-4/5">
  	<div class="flex justify-between items-center">
  	
  	<span class=" block text-orange-darkest text-5xl font-bold font-sans">Johanes <span class="text-yellow-dark">005/010</span> </span>



  <div class="">
  		<img id="coffeeOpen" onclick="coffeeOpen()" class="  float-right h-18" src="img/Add-Coffee.svg">
	<img id="coffeeClose" onclick="coffeeClose()" class="float-right h-18 hidden tw-skew-10deg " src="img/Add-Coffee.svg">
  </div>
</div>

</div>
</div>
</div>

<div id="coffeeOrder" class="coffeeOrders px-6 bg-white rounded-b-lg mb-8 mt-20 z-10 pt-20 pb-20 hidden">
	<div class="flex w-full justify-around pt-8">
	<button>
		<span class="font-sans text-white text-center pt-3 text-2xl font-bold absolute bg-green rounded-full h-12 w-12 z-10 ">005</span>
		<div class="h-32">
			<img class=" h-24 mt-6" src="img/einfacher-Coffee.svg">
		</div>
	
		<p class="font-sans text-4xl font-bold pt-2">Einfacher</p>

		<div class="mt-6 text-2xl  text-grey">0,50€</div>
	</button>
	<span class="h-45 bg-grey-lighter w-1"></span>
	<button class="text-center">
		<span class="font-sans text-white text-center pt-3 text-2xl font-bold  bg-green rounded-full h-12 w-12 z-10 absolute ">010</span>
		<div class="h-32 ">		
			<img class=" h-24 mt-6" src="img/Doppelter-Coffee.svg">
		</div>
	
		<p class="font-sans text-4xl font-bold pt-2">Doppelter</p>

		<div class="mt-6 text-2xl text-grey">1€</div>
	</button>
</div>
</div>

</div>


{{-- secand --}}

<div class="mb-8 mx-4 relative pt-4 min-h-32 ">
<div class="bg-yellow rounded-full px-6 py-6 h-32 z-20 absolute w-full">

<div class="flex ">

  <div class="w-1/5 relative">
  	
  </div>

  <div class="w-4/5">
  	<div class="flex justify-between items-center">
  	
  	<span class=" block text-orange-darkest text-5xl font-bold font-sans">Johanes <span class="text-yellow-dark">005/010</span> </span>



  <div class="">
  		<img id="coffeeOpen" onclick="coffeeOpen()" class="  float-right h-18" src="img/Add-Coffee.svg">
	<img id="coffeeClose" onclick="coffeeClose()" class="float-right h-18 hidden tw-skew-10deg " src="img/Add-Coffee.svg">
  </div>
</div>

</div>



</div>
</div>

<div id="coffeeOrder" class="coffeeOrders px-6 bg-white rounded-b-lg mb-8 mt-20 z-10 pt-20 pb-20 hidden">
	<div class="flex w-full justify-around pt-8">
	<button>
		<span class="font-sans text-white text-center pt-3 text-2xl font-bold absolute bg-green rounded-full h-12 w-12 z-10 ">005</span>
		<div class="h-32">
			<img class=" h-24 mt-6" src="img/einfacher-Coffee.svg">
		</div>
	
		<p class="font-sans text-4xl font-bold pt-2">Einfacher</p>

		<div class="mt-6 text-2xl  text-grey">0,50€</div>
	</button>
	<span class="h-45 bg-grey-lighter w-1"></span>
	<button class="text-center">
		<span class="font-sans text-white text-center pt-3 text-2xl font-bold  bg-green rounded-full h-12 w-12 z-10 absolute ">010</span>
		<div class="h-32 ">		
			<img class=" h-24 mt-6" src="img/Doppelter-Coffee.svg">
		</div>
	
		<p class="font-sans text-4xl font-bold pt-2">Doppelter</p>

		<div class="mt-6 text-2xl text-grey">1€</div>
	</button>
</div>
</div>

</div>


<script type="text/javascript">

	/* Set the width of the side navigation to 250px */
function coffeeOpen() {
    var coffeeOrder = document.getElementById("coffeeOrder");
    coffeeOrder.classList.remove("hidden");
    var coffeeOpen = document.getElementById("coffeeOpen");
    coffeeOpen.classList.add("hidden");
    var coffeeClose = document.getElementById("coffeeClose");
    coffeeClose.classList.remove("hidden");
    coffeeClose.style.transform = "rotate(47deg)";

}
/* Set the width of the side navigation to 0 */
function coffeeClose() {
       var coffeeOrder = document.getElementById("coffeeOrder");
    coffeeOrder.classList.add("hidden");
    var coffeeOpen = document.getElementById("coffeeOpen");
    coffeeOpen.classList.remove("hidden");
    var coffeeClose = document.getElementById("coffeeClose");
    coffeeClose.classList.add("hidden");
}

</script>

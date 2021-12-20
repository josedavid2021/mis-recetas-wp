<?php get_header(); ?>

<div class="container mx-auto px-10 mb-20">

        <main class="grid grid-cols-12 gap-8 items-start">
            <section class="col-span-full sm:col-span-8 md:col-span-9">

                <div class="grid grid-cols-2 gap-6">

                    <div class="border border-gray-400 p-2 sm:p-4">                        
                        <h2 class="text-xl sm:text-2xl uppercase text-center mb-3 hover:underline">
                            <a href="receta.html">Espaguetis de calabacín</a>
                        </h2>
                        <a href="receta.html">
                            <img class="hover:opacity-80 rounded-2xl" src="images/espaguetis-de-calabacin.jpg" alt="imagen1">
                        </a>
                    </div>

                    <div class="border border-gray-400 p-2 sm:p-4">                        
                        <h2 class="text-xl sm:text-2xl uppercase text-center mb-3 hover:underline"><a href="receta.html">Lubina con hummus de guisantes</a></h2>
                        <a href="receta.html"><img class="hover:opacity-80 rounded-2xl" src="images/lubina-con-hummus-de-guisantes.jpg" alt="imagen1"></a>
                    </div>

                    <div class="border border-gray-400 p-2 sm:p-4">                        
                        <h2 class="text-xl sm:text-2xl uppercase text-center mb-3 hover:underline"><a href="receta.html">Tiramisú Express</a></h2>
                        <a href="receta.html"><img class="hover:opacity-80 rounded-2xl" src="images/tiramisu-express.jpg" alt="imagen1"></a>
                    </div>

                    <div class="border border-gray-400 p-2 sm:p-4">                        
                        <h2 class="text-xl sm:text-2xl uppercase text-center mb-3 hover:underline"><a href="receta.html">Vichyssoise de esparragos blancos</a></h2>
                        <a href="receta.html"><img class="hover:opacity-80 rounded-2xl" src="images/vichyssoise-de-esparragos-blancos.jpg" alt="imagen1"></a>
                    </div>
                                 
                </div>

            </section>
            <aside class="col-span-full sm:col-span-4 md:col-span-3 bg-gray-200 p-4">
                <h2 class="text-2xl uppercase text-center mb-3">Menú del día</h2>
                <div>
                    <div class="flex items-center mb-3">  
                        <img class="w-28 mr-3" src="images/vichyssoise-de-esparragos-blancos.jpg" alt="">
                        <a class="hover:underline" href="https://www.google.com/">Entrante</a>
                    </div>
                    <div class="flex items-center mb-3">  
                        <img class="w-28 mr-3" src="images/lubina-con-hummus-de-guisantes.jpg" alt="">
                        <a class="hover:underline" href="https://www.google.com/">Principal</a>
                    </div>
                    <div class="flex items-center">  
                        <img class="w-28 mr-3" src="images/tiramisu-express.jpg" alt="">
                        <a class="hover:underline" href="https://www.google.com/">Postre</a>
                    </div>


                </divl>
            </aside>
        </main>
    </div>

<?php get_footer(); ?>
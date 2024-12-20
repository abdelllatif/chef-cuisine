<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">

            <?php while ($row = $menu->fetch_assoc() ): ?>                 
                  <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                       <div class="p-6">
                        <h3 class="text-2xl font-semibold text-black mb-4"><?php echo htmlspecialchars($row['title']); ?></h3>
                        <p class="text-gray-600 mb-6"><?php echo htmlspecialchars($row['description']); ?></p>
                    </div>
                        <?php endwhile; ?>

                    <?php while ( $plat = $plats->fetch_assoc()): ?>
                        <div>
                        <h3 class="text-2xl font-semibold text-black mb-4"><?php echo htmlspecialchars($plat['title']); ?></h3>
                        <p class="text-gray-600 mb-6"><?php echo htmlspecialchars($plat['ingredient']); ?></p>
                        <img  src="<?php echo $plat['image']; ?>" alt="Gourmet Dish" class="w-full h-60 object-cover rounded-t-xl">
                        </div>
                </div>        
                 <button onclick="reserveDish('Signature Dish: Truffle Risotto')" class="w-full bg-orange-500 text-white py-2 rounded-full hover:bg-orange-800 transition duration-300">Reserve This Dish</button>

                <?php endwhile; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creation</title>
</head>
<style>
.sec {
  font-family: 'Poppins', sans-serif;
  margin: 0;
  padding: 0;
  color: #333;
  text-align: center;
}

.recent-products {
  padding: 60px 20px;
}

.recent-products h2 {
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 10px;
}

.browse {
  display: inline-block;
  color: #0066ff;
  font-size: 1.1rem;
  font-weight: 600;
  text-decoration: none;
  margin-bottom: 40px;
}

.browse:hover {
  text-decoration: underline;
}

.product-list {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 40px;
  margin-top: 30px;
}

.product-card {
  width: 220px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.product-card img {
  width: 100%;
  border-radius: 10px;
  transition: transform 0.3s ease;
}

.product-card h3 {
  font-size: 1rem;
  margin: 10px 0 5px;
  color: #555;
}

.price {
  font-size: 1rem;
  font-weight: 500;
  color: #111;
}

/* Hover effect */
.product-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
}

.product-card:hover img {
  transform: scale(1.05);
}
</style>
<body>
     <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Creation') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-bold mb-2" style="color: white">Free</h3>
                    <p class="text-gray-600 dark:text-gray-300">This is the content of card 1.</p>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-bold mb-2" style="color: white">Premium</h3>
                    <p class="text-gray-600 dark:text-gray-300">This is the content of card 2.</p>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-bold mb-2" style="color: white">Extra</h3>
                    <p class="text-gray-600 dark:text-gray-300">This is the content of card 3.</p>
                </div>
            </div>
        </div>
    </div>
    <section class="recent-products sec" style="color: white">
    <h2>Recent Products</h2>
    <a href="#" class="browse">Browse All Products</a>

    <div class="product-list">
      <div class="product-card">
        <img src="img/summoner.jpg" alt="Summoner">
        <h3>RPG Class Awakened | Summoner</h3>
        <p class="price">$24.99</p>
      </div>

      <div class="product-card">
        <img src="img/mage-boss.jpg" alt="Mage Boss">
        <h3>RPG Class Boss | Mage</h3>
        <p class="price">$14.99 – $24.99</p>
      </div>

      <div class="product-card">
        <img src="img/shaman.jpg" alt="Shaman">
        <h3>RPG Class Awakened | Shaman</h3>
        <p class="price">$24.99</p>
      </div>

      <div class="product-card">
        <img src="img/archer.jpg" alt="Archer">
        <h3>RPG Class Boss | Archer</h3>
        <p class="price">$14.99 – $24.99</p>
      </div>

      <div class="product-card">
        <img src="img/mage-awakened.jpg" alt="Mage Awakened">
        <h3>RPG Class Awakened | Mage</h3>
        <p class="price">$24.99</p>
      </div>
    </div>
  </section>

  <script src="script.js"></script>
  <script>
    // Simple fade-in animation on load
document.addEventListener("DOMContentLoaded", () => {
  const cards = document.querySelectorAll(".product-card");
  cards.forEach((card, index) => {
    card.style.opacity = 0;
    card.style.transform = "translateY(20px)";
    setTimeout(() => {
      card.style.transition = "all 0.6s ease";
      card.style.opacity = 1;
      card.style.transform = "translateY(0)";
    }, index * 150);
  });
});

  </script>
</x-app-layout>
</body>
</html>
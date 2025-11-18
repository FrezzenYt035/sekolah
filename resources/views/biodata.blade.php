<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=extension"/>

    <title>Profil</title>
</head>
<style>
    .lingkaran {
      background-image: url('{{ asset('img/pp.png') }}');
      background-size: cover;
      background-position: center;
      height: 150px;
      width: 150px;
      border: 5px solid rgb(0, 64, 132);
      border-radius: 50%;
      flex-shrink: 0;  
    }

    .nama {
        font-size: 28px;
        margin-top: 0px;
        color: white;
    }

    .skill {
        font-size: 20px;
        margin-top: 0px;
        margin-bottom: 10px;
        color: rgb(255, 255, 255);
    }

    .deskripsi {
        font-size: 17px;
        margin-top: 0px;
        color: rgb(205, 205, 205);
        margin-top: 5px;

    }

    .deskripsi p {
        font-size: 17px;
        margin-top: 0px;
        color: rgb(167, 167, 167);
        margin-top: 5px;
        margin-bottom: 3px;
        padding: 5px;

    }
    .section {
        font-size: 18px;
        margin-top: 20px;
    }

    .section1 {
        font-size: 18px;
        margin-top: 20px;
        margin-left: 32px;
    }

    .container {
      display: flex;         
      align-items: flex-start;
      gap: 40px;             
      margin: 0px;          
    }

    .container1 {
      display: flex;         
      align-items: flex-start;
      gap: 8%;             
      margin-left: 10%;          
    }

    li {
        color: rgb(205, 205, 205);
        margin-bottom: 10px;
    }
    .good {
        color: rgb(0, 177, 0);
    }

    .yt {
        color: white;
        padding: 10px 20px;
        border: 2px solid red;
        border-radius: 18px;
        text-decoration: none;
        width: 180px;
        font-size: 16px;
        cursor: pointer;
        margin-top: 10px;
        margin-left: 42px;
    }
    .yt:hover {
        background-color: #ff0000;
        transition: all 0.3s ease;
        box-shadow: 0 8px 15px rgba(255, 54, 54, 0.4);
        animation: slideInOut 3s ease-in-out infinite;
    }

    .ig:hover {
        background-color: rgb(0, 145, 255);
        transition: all 0.3s ease;
        box-shadow: 0 8px 15px rgba(0, 191, 255, 0.4);
        animation: slideInOut 3s ease-in-out infinite;
        
    }

    .ig {
        color: white;
        padding: 10px 20px;
        border: 2px solid rgb(0, 145, 255);
        border-radius: 18px;
        text-decoration: none;
        width: 180px;
        font-size: 16px;
        cursor: pointer;
        margin-top: 10px;
    }

    .wa {
        color: white;
        padding: 10px 20px;
        border: 1px solid rgb(0, 195, 7);
        border-radius: 5px;
        text-decoration: none;
        width: 200px;
        font-size: 16px;
        cursor: pointer;
        margin-top: 10px;
    }

    .fa-youtube {
        color: rgb(255, 255, 255);
    }
    .fa-instagram {
        color: rgb(255, 255, 255);
    }

    .work {
        color: rgb(255, 200, 0);
        font-size: 20px;
        margin-bottom: 10px;
    }
    @keyframes slideInOut {
  0% {
    opacity: 1;
    transform: translateY(0px);
  }
  50% {
    opacity: 1;
    transform: translateY(-10px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}
.judul {
    font-size: 20px;
    color: white;
    margin-bottom: 20px;
}
.app {
    margin-right: 30px;
}
.title {
    font-size: 18px;
    font-weight: bold;
    color: white;
}
.box {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 16px;
}
.content:hover{
    transform: translateY(-10px);
    box-shadow: 0 8px 15px rgba(47, 89, 152, 0.4);
    transition: all 0.3s ease-in-out;
    background: linear-gradient(120deg, transparent, rgba(60, 92, 188, 0.347), transparent);
}
.fa-code {
    color: rgb(0, 132, 255);
    font-size: 50px;
    text-align: center;
    argin-bottom: 20px;
    margin-left: 33%;
    margin-top: 10px;
}
.title-addon {
    font-size: 20px;
    font-weight: bold;
    color: white;
    text-align: center;
    margin-bottom: 20px;
    margin-top: 10px;
}
.desc-addon {
    font-size: 14px;
    color: rgb(200, 200, 200);
    text-align: center;
    margin-bottom: 20px;
    margin-left: 5px;
}
.fa-dice-d6 {
    color: rgb(255, 204, 0);
    font-size: 50px;
    text-align: center;
    argin-bottom: 20px;
    margin-left: 38%;
    margin-top: 10px;
}
.fa-paintbrush {
    color: rgb(97, 76, 255);
    font-size: 45px;
    text-align: center;
    argin-bottom: 20px;
    margin-left: 37%;
    margin-top: 10px;
}
  </style>
<body>
    <x-app-layout>
    <br>
    <br>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 title">
                    {{ __('Biodata') }}
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-md mx-auto mt-8">
        <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden" style="width: 80%; justify-content: center; align-items: center; margin-left: auto; margin-right: auto;">
            <div class="p-6 container">
                <div class="lingkaran"><div class="lingkaran1"></div></div>
                <div>
                    <h1 class="nama">{{ Auth::user()->name }}</h1>
                    <p class="work">Addon's Developer Indonesia</p>
                    <p class="deskripsi">Halo! Saya ZeNn ID, seorang kreator digital dan pengembang konten yang berfokus pada dunia Minecraft dan desain interaktif. 
                                        Saya memiliki ketertarikan besar terhadap pengembangan game, desain visual, serta scripting yang membuat pengalaman bermain menjadi lebih menarik dan dinamis.</p>
                    <br>
                    <div class="container">
                    <div class="section">
                        <h3 class="skill">Keahlian & Kemampuan</h3>
                        <ul>
                        <li><span class="good">✓</span> Frontend</li>
                        <li><span class="good">✓</span> Designer</li>
                        <li><span class="good">✓</span> 3D Modeler</li>
                        <li><span class="good">✓</span> UI & UX</li>
                        </ul>
                    </div>

                    <div class="section1">
                        <h3 class="skill">Bahasa Pemrograman</h3>
                        <ul>
                        <li><span class="good">✓</span> HTML</li>
                        <li><span class="good">✓</span> CSS</li>
                        <li><span class="good">✓</span> JavaScript</li>
                        <li><span class="good">✓</span> JSON</li>
                        </ul>
                    </div>

                    <div class="section">
                        <button class="yt" onclick="window.open('https://www.youtube.com/@frezzen_id', '_blank')"><i class="fa-brands fa-youtube fa-lg"></i> Youtube</button>
                    </div>

                    <div class="section">
                        <button class="ig" onclick="window.open('https://www.instagram.com/frezzen_id/', '_blank')"><i class="fa-brands fa-instagram fa-lg"></i> Instagram</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="max-w-md mx-auto mt-8 box">
        <div class="content bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden" style="width: 26%; height: 250px;">
            <div class="p-6 container1">
                <i class="fa-solid fa-code"></i>
            </div>
            <h1 class="title-addon">Addon's Development</h1>
            <p class="desc-addon">Addon's Development adalah proses membuat dan mengembangkan add-on di Minecraft Bedrock Edition untuk menambah fitur kustom.</p>
        </div>
        <div class="content bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden" style="width: 26%; height: 250px;">
            <div class="p-6 container1">
                <i class="fa-solid fa-dice-d6"></i>
            </div>
            <h1 class="title-addon">3D Model Creator</h1>
            <p class="desc-addon">3D Creator adalah proses merancang dan membuat model tiga dimensi untuk digunakan dalam game, animasi, atau desain digital.</p>
        </div>
        <div class="content bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden" style="width: 26%; height: 250px;">
            <div class="p-6 container1">
                <i class="fa-solid fa-paintbrush"></i>
            </div>
            <h1 class="title-addon">Designer</h1>
            <p class="desc-addon">Designer adalah seseorang yang merancang tampilan visual atau konsep kreatif dalam berbagai bidang seperti grafis, UI/UX, dan produk digital.</p>
        </div>
    </div>
    <br>
</x-app-layout>
</body>
</html>
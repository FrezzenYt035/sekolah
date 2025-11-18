<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
  <title>Album</title>

  <style>
    .cards-container {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 30px;
      flex-wrap: wrap;
      padding: 20px;
    }

    .card {
      background: #1d183a;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      overflow: hidden;
      width: 450px;
      height: 340px;
      transition: transform 0.3s ease;
      display: flex;
      flex-direction: column;
      margin: 0;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      display: block;
    }

    .card h3 {
      font-size: 18px;
      margin: 10px 0 5px;
      color: white;
    }

    .card p {
      color: rgb(197, 197, 197);
      font-size: 14px;
      margin-bottom: 10px;
    }

    .garis {
      width: 70%;
      margin-left: 15%;
      border: 1px solid rgb(37, 35, 69);
    }

    .card-buttons {
      display: flex;
      justify-content: flex-end;
      gap: 10px;
    }

    .btn-edit, .btn-delete {
      padding: 10px 6px;
      border-radius: 8px;
      font-size: 14px;
      text-decoration: none;
      border: none;
      cursor: pointer;
      transition: all 0.2s ease;
      width: 40px;
      height: 40px;
      text-align: center;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .btn-edit {
      background-color: transparent;
      border: 1px solid #2563eb;
      color: white;
    }

    .btn-edit:hover {
      background-color: #2563eb;
    }

    .btn-delete {
      background-color: transparent;
      border: 1px solid #dc2626;
      color: white;
    }

    .btn-delete:hover {
      background-color: #dc2626;
    }
  </style>
</head>
<body>
  <x-app-layout>
    <div style="padding-top: 80px;">
      <h1 style="text-align: center; color: white; font-size: 30px; margin-bottom: 20px;">Album</h1>
      <hr class="garis">
      <br>

      <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search..."
          style="width: 700px; padding: 10px; border-radius: 12px;
          border: 1px solid #372d6c; display: block; margin: 0 auto 20px auto;
          background-color: transparent; color: white;">
      </div>

      <div class="cards-container">
        @foreach($products as $product)
          <div class="card">
            @if($product->gambar)
              <img src="{{ asset('uploads/' . $product->gambar) }}" alt="{{ $product->nama }}">
            @else
              <img src="https://via.placeholder.com/450x260?text=No+Image" alt="No Image">
            @endif

            <div style="padding: 10px;">
              <h3>{{ $product->nama }}</h3>
              <p>{{ $product->deskripsi }}</p>

              <div class="card-buttons">
                <!-- Tombol Edit -->
                <a href="{{ route('produk.edit', $product->id) }}" class="btn-edit">
                  <i class="fa-solid fa-pen"></i>
                </a>

                <!-- Tombol Hapus -->
                <form action="{{ route('produk.destroy', $product->id) }}" method="POST" style="display:inline;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn-delete"
                          onclick="return confirm('Yakin mau hapus data ini?')">
                    <i class="fa-solid fa-trash"></i>
                  </button>
                </form>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </x-app-layout>
</body>
</html>

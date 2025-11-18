<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <title>Import Content</title>
</head>
<style>
    input {
        display: block;
    }
    .form-input {
        display: flex;
        margin-left: 20px;
        margin-top: 50px;
    }

    .form-input input[type="text"] {
        width: 500px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 12px;
        font-size: 16px;
    }
    .form-input input[name="alamat"] {
        height: 100px;
        box-sizing: border-box;
        line-height: 40px;
    }
    .input-nama {
        margin-right: 20px;
    }
    .input-alamat {
        margin-right: 20px;
        position: relative;
        height: 40px;
    }
    .form-container {
        margin-bottom: 20px;
        display:flex;
        flex-direction: column;
    }
    .import {
        background-color: #0056f7;
        color: white;
        align-self: flex-end;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 1px;
        width: 110px;
        height: 35px;
    }
    .import:hover {
        background-color: #0043c1;
    }

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
      width: 385px;
      height: 335px;
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

    .judul {
        color: white;
        text-align: left;
        padding: 0% 10%;
        font-size: 28px;
        margin-top: 40px;
    }
    .garis {
      width: 80%;
      margin-left: 10%;
      border: 1px solid rgb(37, 35, 69);
    }

    .pagination {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 12px;
  top: 20px;
}

.pagination a, 
.pagination span {
  padding: 8px 14px;
  border-radius: 8px;
  text-decoration: none;
  font-size: 15px;
  color: white;
  background-color: #1d183a;
  border: 1px solid #372d6c;
  transition: all 0.3s ease;
}

.pagination a:hover {
  background-color: #2563eb;
  color: white;
}

.pagination .current {
  background-color: #2563eb;
  border-color: #2563eb;
  font-weight: bold;
}

.pagination .disabled {
  opacity: 0.5;
  cursor: not-allowed;
}
.button-up {
    display: flex;
    justify-content: flex-end;
    align-items: center;
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
                    {{ __('Import Content') }}
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-md mx-auto mt-8">
        <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden" style="width: 80%; justify-content: center; align-items: center; margin-left: auto; margin-right: auto;">
            <div class="p-6 container">
                <div class="lingkaran"><div class="lingkaran1"></div></div>
                <div>

                 @if(session('success'))
                    <p style="color: green;">{{ session('success') }}</p>
                 @endif

   

                    <div class="container">
                        <div class="section">
                            @if(isset($editProduct))
    <form action="{{ route('produk.update', $editProduct->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
@else
    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
@endif

                                @csrf
                                <div class="form-container">
                                    <label for="nama" style="color: white; margin-bottom: 12px;">Name Content</label>
                                    <input type="text" name="nama" id="nama" placeholder="Masukkan Nama Content" style="width: 100%; border-radius: 12px; padding: 10px; border: 1px solid #372d6c; background-color: transparent; color: white;"  value="{{ isset($editProduct) ? $editProduct->nama : '' }}">
                                </div>
                                <div class="form-container">
                                    <label for="nama" style="color: white; margin-bottom: 12px;">Descriptions Content</label>
                                    <textarea name="deskripsi" id="deskripsi" placeholder="Descriptions...." style="width: 100%; height: 100px; border-radius: 12px; padding: 10px; border: 1px solid #372d6c; background-color: transparent; color: white;" required>{{ isset($editProduct) ? $editProduct->deskripsi : '' }}</textarea>
                                </div>
                                <div class="form-container">
                                    <label for="nama" style="color: white; margin-bottom: 12px;">Image Content</label>
                                    @if(isset($editProduct) && $editProduct->gambar)
                                    <img src="{{ asset('uploads/' . $editProduct->gambar) }}" alt="Current Image" width="200" style="margin-top: 10px; border-radius: 8px;"><br>
                                    @endif
                                    <input type="file" id="gambar" name="gambar" accept="image/*" style="color: rgb(230, 230, 230);">           
                                <br>
                                <div class="button-up">
                                    <button class="import" type="submit">
                                    {{ isset($editProduct) ? 'Update' : 'Import' }}
                                </button>
                                @if(isset($editProduct))
                                    <a href="{{ route('buku_tamu') }}" 
                                        style="margin-left: 15px; color: white; background-color: #dc2626; padding: 6px 20px; border-radius: 5px; text-decoration: none; widt">
                                        Batal
                                    </a>
                                @endif
                                </div>
                                
                            </form>
                        </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <h1 class="judul">Content</h1>
    <br>
    <hr class="garis">
    <br>
    <div class="search-container" style="display: flex; justify-content: center; align-items: center; margin-bottom: 30px;">
  <form action="{{ route('buku_tamu') }}" method="GET" style="display: flex; align-items: center; gap: 10px;">
    <input 
      type="text" 
      name="search" 
      value="{{ request('search') }}" 
      placeholder="Search..." 
      style="width: 400px; padding: 10px 15px; border-radius: 10px; border: 1px solid #372d6c; 
             background-color: transparent; color: white; outline: none; font-size: 15px;">
    
    <button 
      type="submit" 
      style="padding: 10px 20px; border-radius: 10px; border: none; background-color: #2563eb; 
             color: white; cursor: pointer; font-size: 15px; transition: 0.3s;">
      Cari
    </button>
  </form>
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
                <a href="{{ route('buku_tamu', ['edit' => $product->id]) }}" class="btn-edit">
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
        <div class="pagination">

    {{-- Nomor Halaman --}}
    @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
        @if ($page == $products->currentPage())
            <span class="current">{{ $page }}</span>
        @else
            <a href="{{ $url }}">{{ $page }}</a>
        @endif
    @endforeach
</div>
<br>


</x-app-layout>
</body>
</html>
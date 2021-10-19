<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.23.0/axios.min.js" integrity="sha512-Idr7xVNnMWCsgBQscTSCivBNWWH30oo/tzYORviOCrLKmBaRxRflm2miNhTFJNVmXvCtzgms5nlJF4az2hiGnA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Ajax-Dischi</title>
</head>
<body>
<div id="app">
  <header class="header-container d-flex justify-content-between">
    <div class="logo d-flex align-items-center px-3">
      <img src="./img/logo.png" alt="">
    </div>

    <div class="d-flex align-items-center px-3">
      <select 
        v-model="selectedGenre"
        class="form-select"
      >
        <option value="">Seleziona un genere</option>
        <option 
          v-for="(genre, index) in genres" :key="index"
          :value="genre"
        >
          {{genre}}
        </option>
      </select>
    </div>
  </header>

  <div class="container mt-5">
    <div class="d-flex flex-wrap">
      <div class="album p-3 text-center" v-for="(AlbumInfo, index) in FiltredAlbumList" :key="index">
        <div class="img-container">
          <img :src="AlbumInfo.poster" alt="">
        </div>
        <h2>
          {{AlbumInfo.title}}
        </h2>
        <span>
          {{AlbumInfo.author}}
        </span>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<script src="js/main.js"></script>
</body>
</html>
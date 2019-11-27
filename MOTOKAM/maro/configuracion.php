


<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html><html class=''>

<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/vue-router/2.2.1/vue-router.js'></script>
<head><script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/mevdschee/pen/BpbEbj?depth=everything&order=popularity&page=63&q=device&show_forks=false" />

<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css'>
<style class="cp-pen-styles">.logo {
  width: 95px;
  float: left;
  margin-right: 25px;
}

.form-group {
  max-width: 700px;
}

.actions {
  padding: 15px 0;
}

.glyphicon-euro {
  font-size: 15px;
}</style></head><body>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>MOTOS</title>
  <meta name="description" content="">

</head>
<body>

<div class="container">
  <header class="page-header">
    <div class="branding">
      <img src="img/core-img/logo1.png" alt="Logo" title="Home page" class="logo"/>
      <h1>MOTO KAM</h1>
      <p>BIENVENIDOS A CONFIGURACION</p>
    </div>
  </header>
  <main id="app">
    <router-view></router-view>
  </main>
</div>
<form methood="POST" action="conexion.php">
<template id="product-list">
  <div>
    <div class="actions">
      <router-link class="btn btn-default" v-bind:to="{path: '/add-product'}">
        <span class="glyphicon glyphicon-plus"></span>
      Agregar producto
      </router-link>
    </div>
    <div class="filters row">
      <div class="form-group col-sm-3">
        <label for="search-element">Nombre del producto</label>
        <input v-model="searchKey" class="form-control" id="search-element" requred/>
      </div>
    </div>
    <table class="table">
      <thead>
      <tr>
        <th>cantidad_producto</th>
        <th>nombre</th>
        <th>costos</th>
        <th class="col-sm-2">Activos</th>
      </tr>
      </thead>
      <tbody>
      <tr v-for="product in filteredProducts">
        <td>
          <router-link v-bind:to="{name: 'product', params: {product_id: product.id}}">{{ product.name }}</router-link>
        </td>
        <td>{{ product.description }}</td>
        <td>
          {{ product.price }}
          <span class="glyphicon glyphicon-pesos" aria-hidden="true"></span>
        </td>
        <td>
          <router-link class="btn btn-warning btn-xs" v-bind:to="{name: 'product-edit', params: {product_id: product.id}}">Editar</router-link>
          <router-link class="btn btn-danger btn-xs" v-bind:to="{name: 'product-delete', params: {product_id: product.id}}">Eliminar</router-link>
        </td>
      </tr>
      </tbody>
    </table>
  </div>
</template>

<template id="add-product">
  <div>
    <h2>Agregar Producto</h2>
    <form  action="conexion.php" method="POST">
    <div class="form-group">
        <label for="add-name"  >numero de producto</label>
        <input type="number" name="produc" class="form-control" id="add-description">
      </div>
      <div class="form-group">
        <label for="add-name"  >cantidad_producto</label>
       <input type="number" name="canti" class="form-control" id="add-description" v-model="product.description"/>
      </div>
       <div class="form-group">
        <label for="add-description" >nombre <span class="glyphicon "></span></label>
          <input class="form-control" id="add-name" name="nomb" v-model="product.name" required/>
      
      </div>
       <div class="form-group">
        <label for="add-price" >Costos</label>
         <textarea class="form-control" id="add-price"  name="cost" rows="1" v-model="product.price"></textarea>
      </div>
     
      <button type="submit" class="btn btn-primary">Agregar</button>
      <router-link class="btn btn-default" v-bind:to="'/'">Cancelar</router-link>
    </form>
  </div>
</template>

<template id="product">
  <div>
    <h2>{{ product.name }}</h2>
    <b>Description: </b>
    <div>{{ product.description }}</div>
    <b>Price:</b>
    <div>{{ product.price }}<span class="glyphicon glyphicon-pesos"></span></div>
    <br/>
    <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
    <router-link v-bind:to="'/'">Back to product list</router-link>
  </div>
</template>

<template id="product-edit">
  <div>
    <h2>Editar Producto</h2>
    <form v-on:submit="updateProduct">
       <div class="form-group">
        <label for="add-name"  >numero de producto</label>
        <input type="number" name="produc" class="form-control" id="add-description">
      </div>
      <div class="form-group">
        <label for="edit-name">cantidad_producto</label>
       <input type="number" class="form-control" id="edit-description" name="can" v-model="product.description"/>
      </div>
      <div class="form-group">
        <label for="edit-description">nombre <span class="glyphicon"></span></label>
          <input class="form-control" id="edit-name"  name="nombre" v-model="product.name" required/>
      </div>
       <div class="form-group">
        <label for="edit-price">Costos</label>
       <textarea class="form-control" id="edit-price" rows="2" name="costos" v-model="product.price"></textarea>
      </div>


     
      

      <router-link class="btn btn-default" v-bind:to="'/'">Cancelar</router-link>
    </form>
  </div>
</template>

<template id="product-delete">
  <div>
    <h2>Eliminar {{ product.name }}</h2>
    <form v-on:submit="deleteProduct">
      <p>SEGURO QUE DESEA ELIMINAR</p>
      <button type="submit" class="btn btn-danger">Eliminar</button>
      <router-link class="btn btn-default" v-bind:to="'/'">Cancelar</router-link>
    </form>
  </div>
</template>

</body>
</html>


<script >var products = [
  {id: 1, name: 'guantes', description: '2', price: 10000},
  {id: 2, name: 'cascos', description: '1', price: 300000},

];

function findProduct (productId) {
  return products[findProductKey(productId)];
};

function findProductKey (productId) {
  for (var key = 0; key < products.length; key++) {if (window.CP.shouldStopExecution(1)){break;}
    if (products[key].id == productId) {
      return key;
    }
  }
window.CP.exitedLoop(1);

};

var List = Vue.extend({
  template: '#product-list',
  data: function () {
    return {products: products, searchKey: ''};
  },
  computed: {
    filteredProducts: function () {
      return this.products.filter(function (product) {
        return this.searchKey=='' || product.name.indexOf(this.searchKey) !== -1;
      },this);
    }
  }
});

var Product = Vue.extend({
  template: '#product',
  data: function () {
    return {product: findProduct(this.$route.params.product_id)};
  }
});

var ProductEdit = Vue.extend({
  template: '#product-edit',
  data: function () {
    return {product: findProduct(this.$route.params.product_id)};
  },
  methods: {
    updateProduct: function () {
      var product = this.product;
      products[findProductKey(product.id)] = {
        id: product.id,
        name: product.name,
        description: product.description,
        price: product.price
      };
      router.push('/');
    }
  }
});

var ProductDelete = Vue.extend({
  template: '#product-delete',
  data: function () {
    return {product: findProduct(this.$route.params.product_id)};
  },
  methods: {
    deleteProduct: function () {
      products.splice(findProductKey(this.$route.params.product_id), 1);
      router.push('/');
    }
  }
});

var AddProduct = Vue.extend({
  template: '#add-product',
  data: function () {
    return {product: {name: '', description: '', price: ''}}
  },
  methods: {
    createProduct: function() {
      var product = this.product;
      products.push({
        id: Math.random().toString().split('.')[1],
        name: product.name,
        description: product.description,
        price: product.price
      });
      router.push('/');
    }
  }
});

var router = new VueRouter({routes:[
  { path: '/', component: List},
  { path: '/product/:product_id', component: Product, name: 'product'},
  { path: '/add-product', component: AddProduct},
  { path: '/product/:product_id/edit', component: ProductEdit, name: 'product-edit'},
  { path: '/product/:product_id/delete', component: ProductDelete, name: 'product-delete'}
]});
app = new Vue({
  router:router
}).$mount('#app')
//# sourceURL=pen.js

</script>
</body></html>
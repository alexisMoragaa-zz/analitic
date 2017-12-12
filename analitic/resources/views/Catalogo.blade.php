@extends('app')
@section('content')
<style>
#footer-container {
  margin-top: 1em;
}
</style>
  <!--Contenido-->
    <div id="productos-container">
      <div class="container">
        <div class="row">
          <!--filtros-->
          <div class="col-12 col-md-3">
            <div id="filtros-container">
              <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active n">
                  <h5 class="list-group-item-heading">Categorias</h5>
                </a>
                <a href="" class="list-group-item list-group-item-action">
                  Fierros <span class="badge badge-pill badge-secondary float-right"> 36</span>
                </a>
                <a href="" class="list-group-item list-group-item-action">
                  Bulcometal <span class="badge badge-pill badge-secondary float-right "> 42</span>
                </a>
                <a href="" class="list-group-item list-group-item-action">
                  Tornillos <span class="badge badge-pill badge-secondary float-right " > 81</span>
                </a>
              </div>
              <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active">
                  <h5 class="list-group-item-heading">Busqueda Avanzada</h5>
                </a>
                <div class="list-group-item list-group-item-action">
                  <label for="" class="control-label">Buscar Por</label>
                  <select name="" id="" class="form-control s1">
                    <option value="">ID</option>
                    <option value="">Nombre</option>
                    <option value="">Valor</option>
                  </select>
                  <input type="text" class="form-control s1">
                  <input type="button" class="btn btn-outline-success  s1 float-right" value="Buscar">
                </div>
              </div>
          </div>
        </div>
          <!--filtros-->

          <!--productos-->
          <div class="col-12 col-md-9">
            <div class="row">

              <div class="col-12 col-md-6 col-lg-4">
                <div class="card" style="">
                  <img class="card-img-top" src="http://placeimg.com/290/180/tech/6" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Primer Producto</h4>
                    <p class="card-text">
                      Este es un excelente producto, aunque la imagen no tiene nada que ver con el mismo
                    </p>
                    <a href="#" class="btn btn-link float-right">Ver Mas</a>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="card" style="">
                  <img class="card-img-top" src="http://placeimg.com/290/180/tech/1" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Segundo Producto</h4>
                    <p class="card-text">
                      Este es un excelente producto, aunque la imagen no tiene nada que ver con el mismo
                    </p>
                    <a href="#" class="btn btn-link float-right">Ver Mas</a>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="card" style="">
                  <img class="card-img-top" src="http://placeimg.com/290/180/tech/2" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Tercer Producto</h4>
                    <p class="card-text">
                      Este es un excelente producto, aunque la imagen no tiene nada que ver con el mismo
                    </p>
                    <a href="#" class="btn btn-link float-right">Ver Mas</a>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="card" style="">
                  <img class="card-img-top" src="http://placeimg.com/290/180/tech/3" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Cuarto Producto</h4>
                    <p class="card-text">
                      Este es un excelente producto, aunque la imagen no tiene nada que ver con el mismo
                    </p>
                    <a href="#" class="btn btn-link float-right">Ver Mas</a>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="card" style="">
                  <img class="card-img-top" src="http://placeimg.com/290/180/tech/4" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Quinto Producto</h4>
                    <p class="card-text">
                      Este es un excelente producto, aunque la imagen no tiene nada que ver con el mismo
                    </p>
                    <a href="#" class="btn btn-link float-right">Ver Mas</a>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="card" style="">
                  <img class="card-img-top" src="http://placeimg.com/290/180/tech/5" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title">Sexto Producto</h4>
                    <p class="card-text">
                      Este es un excelente producto, aunque la imagen no tiene nada que ver con el mismo
                    </p>
                    <a href="#" class="btn btn-link float-right">Ver Mas</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          <!--productos-->
        </div>
      </div>
    </div>
  <!--Contenido-->
@endsection




<div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
  <div class="d-flex flex-wrap justify-content-xl-betcity_matriculaween">
    <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
      <div class="card-body">
      <h2 class="text-center">Registrar Nuevo Carro 
        <i class="zmdi zmdi-car" id="styleIcon"></i>
      </h2>
          <hr><br>
        <form action="tabs/newCars.php" method="POST" class="form-sample" enctype="multipart/form-data">  <input type="hidden" name="cliente_id" value="<?php echo $idUser; ?>">        
            <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                  <label for="marca">Marca</label>
                  <input type="text" name="marca" class="form-control" required/>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="namecar">Referencia del carro (<em>Nombre</em>)</label>
                  <input type="text" name="namecar" class="form-control" required/>
                </div>
              </div>
              <div class="col-md-2">
              <div class="form-group">
                  <label for="year">Año (Modelo)</label>
                  <input type="number" name="year" class="form-control" required="true"/>
                </div>
              </div>
              <div class="col-md-2">
              <div class="form-group">
                  <label for="cc">Centímetros Cubicos</label>
                  <input type="number" name="cc" class="form-control"/>
                </div>
              </div>
              
            </div>

            <div class="row">
              <div class="col-md-2">
              <div class="form-group">
                  <label for="precio">Precio</label>
                  <input type="number" name="precio" class="form-control" required="true"/>
                </div>
              </div>
              <div class="col-md-2">
              <div class="form-group">
                  <label for="placa">Placas</label>
                  <input type="text" name="placa" class="form-control" required="true"/>
                </div>
              </div>
              <div class="col-md-2">
              <div class="form-group">
                  <label for="city_matricula">Ciudad de Matrícula</label>
                  <input type="text" name="city_matricula" class="form-control" required="true"/>
                </div>
              </div>
              <div class="col-md-2">
              <div class="form-group">
                  <label for="color">Color</label>
                  <input type="text" name="color" class="form-control" required="true"/>
                </div>
              </div>
              <div class="col-md-2">
              <div class="form-group">
                  <label for="km">Kilometraje</label>
                  <input type="text" name="km" class="form-control" required="true"/>
                </div>
              </div> 
              <div class="col-md-2">
              <div class="form-group">
                  <label for="puertas">Puertas</label>
                  <select name="puertas" class="form-control">
                    
                      <?php
                       for ($p=1; $p <=5; $p++) { 
                        if($p ==4){ ?>
                          <option value="<?php echo $p; ?>" selected><?php echo $p; ?></option>
                        <?php }?>
                        <option value="<?php echo $p; ?>"><?php echo $p; ?></option>
                      <?php }?>
                    </select>
                </div>
              </div>
            </div>
             
            <div class="row">
              <div class="col-md-2">
              <div class="form-group">
                  <label for="combustible">Combustible</label>
                  <select name="combustible" class="form-control">
                    <option value="Gasolina">Gasolina</option>
                    <option value="Diesel">Diesel</option>
                    <option value="Hidrógeno">Hidrógeno</option>
                    <option value="Eléctrico">Eléctrico</option>
                  </select>
                </div>
              </div>
              <div class="col-md-2">
              <div class="form-group">
                  <label for="transmition">Transmisión</label>
                  <select name="transmition" class="form-control">
                    <option value="Mecanica">Mecánica</option>
                    <option value="Automatica">Automática</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="cant">Ciudad <em style="color: red !important;">(Donde se encuentra el carro)</em></label>
                    <input type="text" name="address" class="form-control" required="true"/>
                  </div>
                </div>
              <div class="col-md-2">
                <div class="form-group">
                    <label for="cant" style="color: red !important;">Cantidad Fotos</label>
                    <input type="text" name="cant" class="form-control" required="true"/>
                  </div>
                </div>       
            </div>

            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label for="description">Descripción del Carro</label>
                  <textarea name="description" class="form-control" rows="6"></textarea>
                </div>
              </div>
            </div>

            <br>
            <h5 class="text-center" style="background-color:#ccc; padding: 15px 0px">Carga Fotos del Carro (Use imágenes solo PNG o JPG)</h5>
            <hr><br>

            <div class="row">
                <?php
                for ($i=1; $i <=10; $i++) {  ?>
                    <div class="col-special col-6 col-md-4">
                        <div class="form-group">
                          <div>
                          <?php
                            if($i ==1){ ?>
                              <label class="dropimage profile">
                                Foto principal
                                <input type="file" name="foto<?php echo $i; ?>"  accept="image/*" title="Foto <?php echo $i; ?>" required>
                              </label>
                            <?php }

                              if($i >1 && $i <= 3){ ?>
                              <label class="dropimage profile">
                                Foto <?php echo $i; ?>
                                <input type="file" name="foto<?php echo $i; ?>"  accept="image/*" title="Foto <?php echo $i; ?>" required>
                              </label>
                            <?php }

                            if($i > 3){ ?>
                              <label class="dropimage profile">
                                Foto <?php echo $i; ?>
                                <input type="file" name="foto<?php echo $i; ?>"  accept="image/*" title="Foto <?php echo $i; ?>">
                              </label>
                            <?php } ?>
                          </div>
                        </div>
                    </div>
                <?php }  ?>
              </div>

           <div class="row text-center">
            <div class="col-md-12">
                <p> <strong style="color:red;">IMPORTANTE, TÉRMINOS DE PUBLICACIÓN</strong></p>
                <hr>
                <?php 
                  $sqlTerminos = ("SELECT * FROM terminos ");
                  $queryTerminos = mysqli_query($con, $sqlTerminos);
                  $DataTermino   = mysqli_fetch_array($queryTerminos);
                ?>
                <p style='color:black !important; font-weight: 600;'>
                  <?php echo $DataTermino['terminos']; ?>
                </p>
                <p>
                
                <br>
                  <span style="background-color:#ccc; padding:15px 30px;">
                    <input type="checkbox" name="statusTermino" id="statusTermino" required="true" value="Acepto">
                    <label for="statusTermino"> 
                      <strong>Acepto</strong>
                    </label>
                  </span>
                </p>
              </div>
            </div>


            <br><br>
            <div class="row text-center">
              <div class="col-md-12">
                <button type="submit" class="btn btn-primary btn-icon-text btn-block">
                  <span class="mdi mdi-file-check btn-icon-prepend"></span>
                  Registrar mi Carro</button>
              </div>
            </div>
        </form>
    </div>



    </div>
  </div>
</div>
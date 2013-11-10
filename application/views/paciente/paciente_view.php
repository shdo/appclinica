<div class="legend"><h2>Paciente: Agregar Paciente</h2></div><br/>
<form name = "frm-addpacciente" action = "" method="post">
    <fieldset>
        <legend>FILIACION</legend>
        <div class="area">
            <div class="posicion1" >
                <div style="float:left; width:250px; height:60px;">
                    <label>Nombre Paciente :</label> <br/> 
                    <input type="text" name="txtnombre" value=""  placeholder="Escribe Nombres" required="" />
                </div> 
            </div>

            <div class="posicion1" >
                <div style="float:left; width:250px; height:60px;">
                    <label>Apellido Paterno :</label> <br/> 
                    <input type="text" name="txtapePaterno" value="" placeholder="Escribe Ape. Paterno" required=""/>
                </div> 
            </div>

            <div class="posicion1" >
                <div style="float:left; width:250px; height:60px;">
                    <label>Apellido Materno :</label> <br/> 
                    <input type="text" name="txtapeMaterno" value="" placeholder="Escribe Ape. Materno" required=""/>
                </div> 
            </div>
            <div class="posicion1" >
                <div style="float:left; width:250px; height:60px;">
                    <label>Estado Civil:</label><br/>
                    <select name="list_estado">
                        <option  selected="" value="">Seleccionar...</option>
                        <?php
                            foreach ($estadocivil as $key => $value) {
                                echo '<option value="'.$key.'">'.$value.'</option>';
                            }
                        ?>
                    </select>
                </div> 

            </div>
            <br/><br/><br/>
            <div class="posicion1" >
                <div style="float:left; width:250px; height:60px;">
                    <label>Edad Paciente:</label> <br/> 
                    <input type="text" name="txtedadPaciente" value="" placeholder="Escribe Edad" required=""/>
                </div> 
            </div>
            <div class="posicion1" >
                <div style="float:left; width:250px; height:60px;">
                    <label>Ocupacion:</label> <br/> 
                    <input type="text" name="txtocupacion" value="" placeholder="Escribe Ocupacion" required="" />
                </div> 
            </div>
            <div class="posicion1" >
                <div style="float:left; width:509px; height:60px;">
                    <label>Domicilio:</label> <br/> 
                    <input style="width: 503px" type="text" name="txtdomicilio" value="" placeholder="Escribe Domicilio" required="" />
                </div> 
            </div>
            <br/><br/><br/>
            <div class="posicion1" >
                <div style="float:left; width:250px; height:60px;">
                    <label>Telefono:</label> <br/> 
                    <input type="text" name="txttelefono" value="" placeholder="Escribe Telefono" required=""/>
                </div> 
            </div>

            <div class="posicion1" >
                <div style="float:left; width:250px; height:60px;">
                    <label>Lugar de Nacimiento:</label> <br/> 
                    <input type="text" name="txtLugarNac" value="" placeholder="Escribe Lugar Nac." required=""/>
                </div> 
            </div>
            <div class="posicion1" >
                <div style="float:left; width:250px; height:60px;">
                    <label>Lugar de Procedencia:</label> <br/> 
                    <input type="text" name="txtLugaProc" value="" placeholder="Escribe Lugar Proc." required=""/>
                </div> 
            </div><br/><br/><br/>
        </div>
    </fieldset>
    <fieldset class="antecedentes">
        <legend>ANTECEDENTES</legend>
        <div class="area">
            <div class="posicion1" >
                <div style="float:left; width:519px; height:60px;">
                    <label>Médicos :</label> <br/> 
                    <input type="text" name="txtmedicos" value=""  placeholder="Escriba Medicos" required="" />
                </div> 
            </div>
            <div class="posicion1" >
                <div style="float:left; width:519px; height:60px;">
                    <label>Quirúrgicos :</label> <br/> 
                    <input type="text" name="txtquirurgicos" value="" placeholder="Escriba antecedentes quirurgicos" required=""/>
                </div> 
            </div>
            <br/><br/><br/>
            <div class="posicion1" >
                <div style="float:left; width:1040px; height:60px;">
                    <label>Alérgicos :</label> <br/> 
                    <input type="text" name="txtalergicos" value="" placeholder="Escriba alergias" required=""/>
                </div> 
            </div>
            <br/><br/><br/>
            <div class="posicion1" >
                <div style="float:left; width:170px; height:60px;">
                    <label>Ginecologos:</label>
                </div> 
            </div>
            <div class="posicion1" >
                <div style="float:left; width:275px; height:60px;">
                    <label>FUR:</label> <br/> 
                    <input type="text" name="txtfur" value="" placeholder="" required=""/>
                </div> 
            </div>
            <div class="posicion1" >
                <div style="float:left; width:275px; height:60px;">
                    <label>MENARQUIA:</label> <br/> 
                    <input type="text" name="txtmenarquia" value="" placeholder="" required=""/>
                </div> 
            </div>
            <div class="posicion1" >
                <div style="float:left; width:275px; height:60px;">
                    <label>R.S.:</label> <br/> 
                    <input type="text" name="txtrs" value="" placeholder="" required=""/>
                </div> 
            </div>
            <br/><br/><br/>
            <div class="posicion1" >
                <div style="float:left; width:170px; height:60px;">
                </div> 
            </div>
            <div class="posicion1" >
                <div style="float:left; width:275px; height:60px;">
                    <label>R.C.:</label> <br/> 
                    <input type="text" name="txtrc" value="" placeholder="" required=""/>
                </div> 
            </div>
            <div class="posicion1" >
                <div style="float:left; width:275px; height:60px;">
                    <div class="posicion1" style="padding-left: 0">
                        <div style="float:left; width:50px; height:60px;">
                            <label>G:</label> <br/> 
                            <input type="text" name="txtg" value="" placeholder="" required=""/>
                        </div> 
                    </div>
                    <div class="posicion1" style="padding-left: 0">
                        <div style="float:left; width:50px; height:60px;">
                            <label>P:</label> <br/> 
                            <input type="text" name="txtp" value="" placeholder="" required=""/>
                        </div> 
                    </div>
                </div> 
            </div>
            <div class="posicion1" >
                <div style="float:left; width:275px; height:60px;">
                    <label>M.A.:</label> <br/> 
                    <input type="text" name="txtma" value="" placeholder="" required=""/>
                </div> 
            </div>
            <br/><br/><br/>
            <div class="posicion1" >
                <div style="float:left; width:519px; height:60px;">
                    <label>Hospitalización :</label> <br/> 
                    <input type="text" name="txthospitalizacion" value=""  placeholder="" required="" />
                </div> 
            </div>
            <div class="posicion1" >
                <div style="float:left; width:519px; height:60px;">
                    <label>Hábitos Nocivos :</label> <br/> 
                    <input type="text" name="txthnocivos" value="" placeholder="" required=""/>
                </div> 
            </div>
            <br/><br/><br/>
        </div>
    </fieldset>
    <div class="posicion1" style="float: right;" >
        <div style="float:left;  height:60px;">
            <input type="submit" value="Guardar"  class="button red" />
            <input type="reset" value="Reset" class="button red" />
        </div> 
    </div>
</form>
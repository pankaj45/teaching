      <table class="hoverable responsive-table" border='1' height=25px>
            <thead>
              <tr>
                 <th>
                  <?php
                  if($month==1 && $year==2015){
                  ?>
                 
                  <button data-tid="<?php echo $tid; ?>" onclick="hitu.change(this);hitu.f1(this);" data-action="dispcal" data-month="<?php echo $month; ?>" data-year="<?php echo $year; ?>" value="<?php echo $year; ?>" disabled>
                  <?php }
                  else { ?>


                	<button  data-tid="<?php echo $tid; ?>"  onclick="hitu.change(this);hitu.f1(this);" data-action="dispcal" 
                     data-month="<?php 
                                       
                                       if($month==1 && $year>2015)
                                       echo 12;
                                       else echo $month-1;?>"
                                  
                     data-year="<?php  
                                       if($month==1 && $year>2015 )
                                       echo $year-1;
                                       else echo $year; ?>"
                                       
                     value=" <?php     
                                       if($month==1 && $year>2015 )
                                       echo $year-1;
                                       else echo $year;?>">

                                 
                    <img src="images/r_arrow.png" height="20px" width="20px">
                	</button>
               
                 <?php } ?> 

                </th>
                <th style="height:15px; width:100px;">
                  
                  <select  data-tid="<?php echo $tid; ?>"  id="mon" data-action="dispcal" data-month="<?php echo $month; ?>" data-year="<?php echo $year; ?>" onchange="hitu.changemonth(this);hitu.f1(this);" >
                    <?php
                      for($i=0;$i<12;$i++){?>
                        <option value="<?php echo $i+1; ?>" <?php if($i+1==$month) echo "selected";  ?> ><?php echo $_ginfo["month"][$i]; ?> 
	                    </option>
                       <?php } ?>
                  </select>
                </th>
                
                <th style="height:15px; width:100px;">
                  <select data-tid="<?php echo $tid; ?>" id="ye" data-action='dispcal' data-year='<?php echo $year; ?>' data-month='<?php echo $month; ?>' onchange="hitu.changeyear(this);hitu.f2(this);" >
                    <?php
                      for($i=2015;$i<=$_ginfo['end_year'];$i++){?>
                        <option value="<?php echo $i?>" <?php if($i==$year) echo "selected";  ?>  ><?php echo $i?>
                    	</option>
                       <?php } ?>
                  </select>
                </th>
                
                <th style="float:right;">
                  <?php
                   if($month==12 && $year==$_ginfo['end_year']){
                  ?>
                  <button  data-tid="<?php echo $tid; ?>"  onclick="hitu.change(this);hitu.f1(this);" data-action="dispcal" 
                     data-month="<?php echo $month; ?>" data-year="<?php echo $year; ?>" value="<?php echo $month; ?>" disabled>
                  <?php }
                  else { ?>

                    <button  data-tid="<?php echo $tid; ?>"  onclick="hitu.change(this);hitu.f1(this);" data-action="dispcal" 
                      data-month="<?php if($month==12 && $year<$_ginfo['end_year'])
                                        echo 1; 
                                        else 
                                        echo $month+1; ?>" 
                      data-year="<?php if($month==12 && $year<$_ginfo['end_year'])
                                       echo $year+1;
                                       else echo $year; ?>" 
                      value="<?php  if($month==12 && $year<$_ginfo['end_year'])
                                       echo $year+1;
                                       else echo $year;;?>" >
                      <img src="images/b_arrow.png" height="20px" width="20px">
                		</button>
                  <?php } ?>
                </th>

              </tr>
            </thead>
          </table>

        <div class="card-panel">
          <table class="hoverable responsive-table" border='1' >
            <thead>
              <tr>
                <th >
  <div id="downloadeddata" >
  <?php

  load_view('Template/calenderPrint.php',$inp);

  ?>

  </div></th>
              </tr>
            </thead>
            
          </table>
        </div>
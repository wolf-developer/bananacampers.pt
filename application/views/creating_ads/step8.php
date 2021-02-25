<style>
    body{
        background:#f3f4f5;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-lg-9" style="background:white;height:auto">
            <div>
                <a href="/" >
                    <img src="/assets/img/sign.png" style="width:130px;height:75px;padding:5px;" alt="Monkey">
                </a>
            </div>
            <div><p style="font-size:18px;text-align:center"><b><?php echo $this->lang->line('steprang');?></b></p></div>
            <div class="col-xs-12 ml-auto mr-auto mb-4">
                <div class="multisteps-form__progress">
                    <button class="multisteps-form__progress-btn js-active" type="button" title="Vehicle type">1</button>
                    <button class="multisteps-form__progress-btn js-active" type="button" title="Other vehicle informations">2</button>
                    <button class="multisteps-form__progress-btn js-active" type="button" title="Vehicle photo upload area">3</button>
                    <button class="multisteps-form__progress-btn js-active" type="button" title="Sleeping spots on the vehicle">4</button>
                    <button class="multisteps-form__progress-btn js-active" type="button" title="Vehicle Equipements">5</button>
                    <button class="multisteps-form__progress-btn js-active" type="button" title="Vehicle description">6</button>
                    <button class="multisteps-form__progress-btn js-active" type="button" title="Vehicle parking spot address">7</button>
                    <button class="multisteps-form__progress-btn js-active" type="button" title="Vehicle rental price">8</button>
                    <button class="multisteps-form__progress-btn" type="button" title="Vehicle doc">9</button>
                </div>
            </div>
            <div >
                <h3><?php echo $this->lang->line('renpr');?></h3>
                <p></p>
            </div>
            <!-- here -->
            <div class="row">
                <div class="container">
                    <hr>
                    
                    <div class="row">
                        <div class="col-xs-6">
                            <label for="price"><?php echo $this->lang->line('renpr1');?> € *</label>
                            <div class="form-group">
                                <input type="number" id="price" class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <label for="deposit"><?php echo $this->lang->line('renpr2');?> *</label>
                            <div class="form-group">
                                <input type="number" id="deposit" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div style="text-align:center">
                        <hr><button class="btn btn-primary btn-lg" onclick="back_step7()"><?php echo $this->lang->line('back');?></button>
                        <button class="btn btn-primary btn-lg" onclick="to_step9()"><?php echo $this->lang->line('next');?></button><hr>
                    </div>
                </div>
            </div>
            
            
        </div>
        <div class="col-lg-3 rdiv">
            <div class="aside_advice aside_advicefirst">
            <h3><?php echo $this->lang->line('st7r1');?></h3>
                <p><?php echo $this->lang->line('st7r2');?></p>
            </div>
        </div>
    </div>
</div>

<script>
    function back_step7(){
    window.location.href = '/index.php/Create_ads/step7';
}

function to_step9(){
    var price = $('#price').val();
    var deposit = $('#deposit').val();

    if(price==''){
        $('#price').focus();
        toastr_call('error','This field is required.');return;
    }else if(deposit==''){
        $('#deposit').focus();
        toastr_call('error','This field is required.');return;
    }

    $.post(
        '/index.php/Create_ads/create_step8',
        {
            deposit:deposit,   
            price:price  
        },
        function(data){
            window.location.href = '/index.php/Create_ads/step9';
        }
    );
}

</script>



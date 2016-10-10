@include ('admin.templates.partials.navbar')

<div class="container">
    
<div class="row" style="margin-top:40px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <form role="form" method="POST" action="{{ url('/login') }}">
             {{ csrf_field() }}
                <fieldset>
                    <h2>BIENVENIDO A LA PALOMERA!</h2>
                    <hr class="colorgraph">
                    
                    <hr class="colorgraph">
                    <div class="row">
 
                    </div>
                </fieldset>
        </form>
    </div>
</div>

</div>  
@include ('admin.templates.partials.footer')
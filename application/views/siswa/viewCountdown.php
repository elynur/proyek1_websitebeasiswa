<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">

<!-- partial:index.partial.html -->
<div class="">

    <div style="border-bottom: 1px solid #e0e0e0; margin-bottom: 10px">
    <div class="row">
        <div class="col-md-1">
            <img src="<?php echo base_url('assets/img/logo-bukit_asam.png') ?>" alt="Logo" style="width: 100px">
        </div>
        <div class="col-md-11">
            <h1 style="font-weight: 500; font-size: 39px; margin: 25px">Selamat Datang di Beasiswa <strong style="color: #0d47a1">BIDIKSIBA</strong></h1>
        </div>
    </div>
    <hr>
    <p class="lead">Beasiswa Bidiksiba merupakan salah satu program unggulan CSR PTBA di bidang pendidikan. Pada program Bidiksiba 2017, PTBA menjalin kerjasama dengan dua perguruan tinggi, yaitu Politeknik Negeri Sriwijaya Palembang (Polsri) dan Politeknik Negeri Malang (Polinema)</p>
    <p>Halo, <b><?php echo $this->session->userdata('nama') ?></b>.</p>
    </div>

    <h2 style="font-weight: 500; text-left;" >Batas Pengumuman</h2>
    <p>Dimohon untuk segera melengkapi berkas dan data diri siswa</p>
	<div class="countdown">
        
        <div class="row">

            <div class="col-md-3">
                <div class="bloc-time days" data-init-value="<?php echo $getPengumuman['days'] ?>">
                <span class="count-title">Days</span>

                <div class="figure days days-1">
                    <span class="top">2</span>
                    <span class="top-back">
                        <span>2</span>
                    </span>
                    <span class="bottom">2</span>
                    <span class="bottom-back">
                        <span>2</span>
                    </span>
                </div>

                <div class="figure days days-2">
                    <span class="top">4</span>
                    <span class="top-back">
                        <span>4</span>
                    </span>
                    <span class="bottom">4</span>
                    <span class="bottom-back">
                        <span>4</span>
                    </span>
                </div>
            </div>
            </div>
            <div class="col-md-3"><div class="bloc-time hours" data-init-value="<?php echo $getPengumuman['hours'] ?>">
			<span class="count-title">Hours</span>

			<div class="figure hours hours-1">
				<span class="top">2</span>
				<span class="top-back">
					<span>2</span>
				</span>
				<span class="bottom">2</span>
				<span class="bottom-back">
					<span>2</span>
				</span>
			</div>

			<div class="figure hours hours-2">
				<span class="top">4</span>
				<span class="top-back">
					<span>4</span>
				</span>
				<span class="bottom">4</span>
				<span class="bottom-back">
					<span>4</span>
				</span>
			</div>
		</div></div>
            <div class="col-md-3"><div class="bloc-time min" data-init-value="<?php echo $getPengumuman['minutes'] ?>">
			<span class="count-title">Minutes</span>

			<div class="figure min min-1">
				<span class="top">0</span>
				<span class="top-back">
					<span>0</span>
				</span>
				<span class="bottom">0</span>
				<span class="bottom-back">
					<span>0</span>
				</span>
			</div>

			<div class="figure min min-2">
				<span class="top">0</span>
				<span class="top-back">
					<span>0</span>
				</span>
				<span class="bottom">0</span>
				<span class="bottom-back">
					<span>0</span>
				</span>
			</div>
		</div></div>
            <div class="col-md-3"><div class="bloc-time sec" data-init-value="<?php echo $getPengumuman['seconds'] ?>">
			<span class="count-title">Seconds</span>

			<div class="figure sec sec-1">
				<span class="top">0</span>
				<span class="top-back">
					<span>0</span>
				</span>
				<span class="bottom">0</span>
				<span class="bottom-back">
					<span>0</span>
				</span>
			</div>

			<div class="figure sec sec-2">
				<span class="top">0</span>
				<span class="top-back">
					<span>0</span>
				</span>
				<span class="bottom">0</span>
				<span class="bottom-back">
					<span>0</span>
				</span>
			</div>
		</div></div>

        </div>
        
        
		

		

		
    </div>
    <br>
    <p stle="margin-top: 30px; font-weight: 500;" class="text-center"><?php echo date('l, d F Y - H:i A') ?></p>
</div>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js'></script>

<script>

// Create Countdown
var Countdown = {
  
  // Backbone-like structure
  $el: $('.countdown'),
  
  // Params
  countdown_interval: null,
  total_seconds     : 0,
  
  // Initialize the countdown  
  init: function() {
    
    // DOM
		this.$ = {
        days:     this.$el.find('.bloc-time.days .figure'),
    	hours  : this.$el.find('.bloc-time.hours .figure'),
    	minutes: this.$el.find('.bloc-time.min .figure'),
    	seconds: this.$el.find('.bloc-time.sec .figure')
   	};

    // Init countdown values
    this.values = {
        days  : this.$.days.parent().attr('data-init-value'),
	    hours  : this.$.hours.parent().attr('data-init-value'),
        minutes: this.$.minutes.parent().attr('data-init-value'),
        seconds: this.$.seconds.parent().attr('data-init-value'),
    };
    
    // Initialize total seconds
    this.total_seconds =  (this.values.days * 24 * 60 * 60) + (this.values.hours * 60 * 60) + (this.values.minutes * 60) + this.total_seconds;

    
    // Animate countdown to the end 
    this.count();    
  },
  
  count: function() {
    
    var that    = this,
        $day_1  = this.$.days.eq(0),
        $day_2  = this.$.days.eq(1),
        $hour_1 = this.$.hours.eq(0),
        $hour_2 = this.$.hours.eq(1),
        $min_1  = this.$.minutes.eq(0),
        $min_2  = this.$.minutes.eq(1),
        $sec_1  = this.$.seconds.eq(0),
        $sec_2  = this.$.seconds.eq(1);
    
        this.countdown_interval = setInterval(function() {

        if( that.total_seconds > 0) {

            --that.values.seconds;              
            console.log( that.values.seconds );
            // kondisi 
            if ( (that.values.days == 0) && (that.values.hours == 0) && (that.values.minutes == 0) && (that.values.seconds >= 0) ) {

                // bagian error
                that.values.minutes = 0;
                that.values.hours   = 0;
                that.values.days    = 0;

                console.log("Masuk kondisi error");

            } else {

                console.log( that.values.days +' - '+that.values.hours + '-' + that.values.minutes + ' - '+ that.values.seconds );
                console.log("Masuk kondisi benar");

                if(that.values.minutes >= 0 && that.values.seconds < 0) { 

                    that.values.seconds = 59;
                    --that.values.minutes;
                }
                if(that.values.hours >= 0 && that.values.minutes <= 0) {

                    that.values.minutes = 59;
                    --that.values.hours;
                }
                
                if (that.values.days >= 0 && that.values.hours < 0) {

                    that.values.hours = 24;
                    --that.values.days;
                }

            }

            // Update DOM values// Days
            that.checkHour(that.values.days, $day_1, $day_2);

            // Hours
            that.checkHour(that.values.hours, $hour_1, $hour_2);

            // Minutes
            that.checkHour(that.values.minutes, $min_1, $min_2);

            // Seconds
            that.checkHour(that.values.seconds, $sec_1, $sec_2);

        
            --that.total_seconds;
        }
        else {
            clearInterval(that.countdown_interval);
        }
    }, 1000);    
  },
  
  animateFigure: function($el, value) {
    
     var that         = this,
		     $top         = $el.find('.top'),
         $bottom      = $el.find('.bottom'),
         $back_top    = $el.find('.top-back'),
         $back_bottom = $el.find('.bottom-back');

    // Before we begin, change the back value
    $back_top.find('span').html(value);

    // Also change the back bottom value
    $back_bottom.find('span').html(value);

    // Then animate
    TweenMax.to($top, 0.8, {
        rotationX           : '-180deg',
        transformPerspective: 300,
	      ease                : Quart.easeOut,
        onComplete          : function() {

            $top.html(value);

            $bottom.html(value);

            TweenMax.set($top, { rotationX: 0 });
        }
    });

    TweenMax.to($back_top, 0.8, { 
        rotationX           : 0,
        transformPerspective: 300,
	      ease                : Quart.easeOut, 
        clearProps          : 'all' 
    });    
  },
  
  checkHour: function(value, $el_1, $el_2) {
    
    var val_1       = value.toString().charAt(0),
        val_2       = value.toString().charAt(1),
        fig_1_value = $el_1.find('.top').html(),
        fig_2_value = $el_2.find('.top').html();

    if(value >= 10) {

        // Animate only if the figure has changed
        if(fig_1_value !== val_1) this.animateFigure($el_1, val_1);
        if(fig_2_value !== val_2) this.animateFigure($el_2, val_2);
    }
    else {

        // If we are under 10, replace first figure with 0
        if(fig_1_value !== '0') this.animateFigure($el_1, 0);
        if(fig_2_value !== val_1) this.animateFigure($el_2, val_1);
    }    
  }
};

// Let's go !
Countdown.init();

</script>

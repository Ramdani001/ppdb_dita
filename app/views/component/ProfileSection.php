<section class="w-100 h-100">
    <div class="profileContent d-flex gap-5 p-5" style=' height: 100vh; background-repeat: no-repeat; background-position: center;'>
        
        <div class="w-50 h-100" style="display: grid; place-items: center;">
            <img src="<?= BASEURL ?>assets/img/kepsek.jpg" alt="" class="shadow-lg border border-3 border-light">
        </div>
        <div class="right-profile w-50">
            <div class="pb-2 text-center d-flex gap-2 mb-5 " style="width: 165px; border-bottom: 2px groove gray; z-index: 2;">
                <div class="d-none" id="active-bg">
                    &nbsp;
                </div>
                <button onclick="changeProf('p')" id="btnProfile" type="button" style="z-index: 2; background-color: transparent; padding: 2px 10px; border: none;">
                    Profile
                </button> 
                <button onclick="changeProf('s')" id="btnSambutan" type="button" style="z-index: 2; background-color: transparent; padding: 2px 10px; border: none;">Sambutan</button>
            </div>
            <p id="textProfile">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae reiciendis, quod nemo consequatur magnam labore vel minus? Aspernatur blanditiis id repellat vero, aliquam totam quaerat, ipsum voluptate molestiae laborum eligendi nostrum commodi consequatur est illum possimus tempore quod qui. Labore, maxime autem necessitatibus provident expedita consequatur doloribus voluptate ad cum odit, omnis, perspiciatis temporibus asperiores quia architecto quam excepturi nulla magni totam fugiat incidunt. Nam dolore maxime ullam laudantium minus! Dolor nulla, molestiae incidunt ipsum assumenda possimus minus perspiciatis suscipit placeat dolore debitis eum doloremque doloribus. Consequatur sequi consequuntur quae optio, magni aliquam, itaque dicta aperiam eum rem esse mollitia.
            </p>
            <p id="textSambutan" class="d-none">
                Lorem ipsum dolor
            </p>
        </div>

    </div>
</section>
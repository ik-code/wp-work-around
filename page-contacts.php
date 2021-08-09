<?php get_header(); the_post(); ?>
<div class="wrapper p-typical">
    <div class="contact">
        <div class="contact__headline wow fadeInUp">
            <h3><?php the_title(); ?></h3>
        </div> <!-- .contact__headline -->

        <div class="contact__content">
            <div class="contact__content-l">
                <div class="contact__contacts">
                    <div class="contact__contacts-item wow fadeInUp">
                        <div class="contact-item contact__contacts-item_email">
                            <a href="mailto:<?php the_field('contact_email'); ?>"><?php the_field('contact_email'); ?></a>
                        </div> <!-- .contact__contacts-item_email -->
                        
                        <div class="contact-item contact__contacts-item_phone">
                            <!-- <a href="tel:+380503843266">+380 50 384 32 66</a> -->
                        </div> <!-- .contact__contacts-item_phone -->
                    </div> <!-- .contact__contacts-item -->
                </div> <!-- .contact__contacts -->

                <div class="contact__address wow fadeInUp">
                    <p><?php the_field('adress'); ?></p>
                </div> <!-- .contact__adress -->
            </div> <!-- .contact__content-l -->

            <div class="contact__content-r">
                <canvas id="earth" width="10" height="10"></canvas>
            </div> <!-- .contact_-content-r -->
        </div> <!-- .contact__content -->
    </div> <!-- .contact -->
</div> <!-- .wrapper -->

<script>
    var canvas=$('#earth')[0];
    if ( canvas.getContext && ( canvas.getContext( 'webgl' ) || canvas.getContext( 'experimental-webgl' ) )) {
        document.write('<script src="/wp-content/themes/theme/js/three.min.js"></'+'script>');
        $(function(){
            //wow.stop();
            var animated=$('.animated').length;
            $('.wow').on('animationend webkitanimationend', function(){
                $(this).removeClass('wow')
                animated--
            });
            var R=225, adaptive=true, posZ = 460, //distance to camera
                obliquity=.65, roV1=.005, roV2=0, ro1=0, ro2=-3.14/9, //-.0005
                color='#420236', fogC='#722779', loaded,
                Emap=new THREE.TextureLoader().load('/wp-content/themes/theme/images/world.svg', function(){
                    loaded=1;
                    animated=$('.animated').length;
                }), camera, scene, renderer;

            var positions=[], planet, particle, count = 0, dpr, lastW,
                mouseX = 0, mouseY = 0, x0, y0,
                lookAt=new THREE.Vector3(0, 0, 0),
                H, W=H=canvas.clientWidth, aspect=1;

            renderer = new THREE.WebGLRenderer({alpha:true, antialias:true, canvas: canvas});//
            renderer.setSize( W, H );
            camera = new THREE.PerspectiveCamera( 60, aspect, 1, 10000 );
            scene = new THREE.Scene();
            Emap.anisotropy=Math.min(8, renderer.capabilities.getMaxAnisotropy())||1;
            var Ematerial = new THREE.MeshStandardMaterial({
                map: Emap,
                metalness: .34
            });//, opacity: 0
            var Earth = new THREE.Mesh(new THREE.IcosahedronGeometry(R, 4), Ematerial)
            planet = new THREE.Group();
            planet.add(Earth);//new THREE.Points(geometry, Pmaterial), 
            scene.add(planet);

            camera.position.z=posZ;

            scene.fog=new THREE.Fog("#fff", posZ-3.5*R, posZ-1.5*R);
            hLight=new THREE.HemisphereLight('#fff', '#222', 1.6)
            scene.add(hLight);
            hLight.position.set(2,1,10)

            var t0=new Date()*1, dMax=1000/15, dMin=1000/45, dT=1000/30;
            requestAnimationFrame(function animate() {
                requestAnimationFrame( animate );
                if (animated>0 || !loaded) return;
                var t=new Date()*1, dt=t-t0;
                if (dt<dMin) return; // !Eh || 
                dt=Math.min(dt, dMax);
                t0=t;
                var T=dt/dT, pos=canvas.getBoundingClientRect();
                if (pos.bottom<=0 || pos.top>=window.innerHeight) return;
                if (dpr!=(dpr=window.devicePixelRatio) || W!=(W=H=pos.width)) {
                    renderer.setSize(W, H)
                    renderer.setPixelRatio( dpr );
                    canvas.style='';
                    camera.aspect=W/H;
                    camera.updateProjectionMatrix();
                }
                scene.fog.near += (posZ-R - scene.fog.near ) * .08;
                scene.fog.far = scene.fog.near +1.5*R;
                ro1+=roV1*T; ro2+=roV2*T;
                planet.rotation.set(0,0,0);
                planet.rotateY(ro2).rotateX(obliquity).rotateY(ro1);
                scene.rotation.x+=((-window.innerHeight/2+pos.top+W/2)/window.innerHeight/6-scene.rotation.x)*.1;
                renderer.render( scene, camera );
                //if (wow.stopped) {wow.start(); wow.scrollHandler()};
            })
        })
    } else {
        canvas.style.background='url(images/globe.png) center/100%';
    }
</script>

<?php get_footer(); ?>

<!-- footer -->
<div class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="footer-box about-widget">
                    <h2 class="widget-title">Tentang Kami</h2>
                    <p>
                        {{ $informasis->tentang }}
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-box get-in-touch">
                    <h2 class="widget-title">Alamat</h2>
                    <ul>
                        <li>{{ $informasis->alamat }}</li>
                        <li>
                            {!! $informasis->gmaps_iframe !!}
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-box pages">
                    <h2 class="widget-title">Kontak</h2>
                    <ul style="list-style-type: none">
                        <li>
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:{{ $informasis->email }}" style="text-decoration: underline!important">
                                {{ $informasis->email }}  
                            </a>    
                        </li>
                        <li>
                            <i class="fab fa-whatsapp" aria-hidden="true"></i>
                        <a href="https://wa.me/+62{{ $informasis->no_hp }}" style="text-decoration: underline!important">
                            +62{{ $informasis->no_hp }} 
                        </a>    
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end footer -->
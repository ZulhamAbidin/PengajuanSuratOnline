
        <!-- Footer-->
        <footer class="footer py-4 lorem">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left" style="color:white">Copyright © Kelurahan Labukkang <?= date('Y')?>
					</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn lorem btn-social mx-2" href="#!"><i class="fab fa-youtube"></i></a>
                        <a class="btn lorem btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn lorem btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3" href="#!">Contact</a>
                        <a href="#!">Other</a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="<?= base_url()?>assets/mail/jqBootstrapValidation.js"></script>
        <script src="<?= base_url()?>assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="<?= base_url()?>assets/js/scripts2.js"></script>
        <script src="<?= base_url();?>assets/jquery-ui-1.12.1/jquery-ui.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#nik').autocomplete({
                    source: "<?php echo site_url('Penduduk/get_autocomplete');?>",

                    select: function (event, ui) {
                    console.log(ui.item)
                            $('[name="nik"]').val(ui.item.label);
                            $('[name="nama"]').val(ui.item.nama);
                            $('[name="no_hp"]').val(ui.item.no_hp);
                    },
                    response: function(event, ui){
                        if(ui.content.length === 0){
                            console.log('No results loaded!');
                        }else{
                            console.log('success!');
                        }
                    },
                });

            });
        </script>

        <script>
            $('#jenis').change(function(){
                var e = document.getElementById("jenis");
                var jenisSurat =  e.value;
                // console.log(jenisSurat)

                const spkk = ['KK Lama (Asli & FC)', 'KTP', 'Surat Pindah dari daerah asal', 'FC Buku Nikah', 'Surat Pengantar/Keterangan RT & RW']
                const spipk = ['FC KTP Pemohon', 'Surat Pengantar/Keterangan RT & RW', 'Denah Tempat Kegiatan', 'Proposal', 'Rown Down Acara', 'Susunan Panitia']
                const spkck = ['KK (Asli & FC)', 'KTP (Asli & FC)', 'Surat Pengantar/Keterangan RT & RW']
                const skkl = ['KK (Asli & FC)', 'KTP', 'Surat Keterangan Kelahiran dari Bidan/RS (Jika ada/ Optional)', 'Surat Pengantar/Keterangan RT & RW']
                const skkm = ['KK (Asli & FC)', 'KTP', 'Surat Keterangan Kematian (Jika ada/Optional)', 'Surat Pengantar/Keterangan RT & RW']
                const skpd = ['KK (Asli & FC)', 'KTP (Asli & FC)', 'Surat Pengantar Pengajuan Pindah dari Kantor Desa/Kelurahan', 'Pas Foto 3x4 Berwarna 3 Lembar', 'FC (Akta Nikah apabila Status Nikah & Akta Cerai apabila Status Cerai)', 'Tanda Bukti Pelunasan PBB']
                const skkd = ['KK (Asli & FC)', 'KTP (Asli & FC)', 'FC (Dokumen pendukung/Surat keterangan yang diLaporkan)']
                const sktm = ['KK (Asli & FC)', 'KTP (Asli & FC)', 'Surat Pengantar/Keterangan RT & RW']
                const skph = ['KK (Asli & FC)', 'KTP (Asli & FC)', 'Surat Pernyataan dari yang bersangkutan(Optional)', 'Surat Pengantar/Keterangan RT & RW']
                const skb = ['KK (Asli & FC)', 'KTP (Asli & FC)', 'Surat Pengantar/Keterangan RT & RW', 'Surat Izin dari Orang Tua/Suami/Istri (Opsional)']
                const skk = ['KK (Asli & FC)', 'KTP (Asli & FC)', 'Akta Kelahiran/Ijazah Terakhir (Asli & FC)', 'Pas Photo Ayah(Wali) Ibu(Wali) dan Pemohon Sebanyak 3 Lembar']
                const skaw = ['KTP (Asli & FC)', 'KK (Asli & FC)', 'Surat Keterangan Kematian', 'Akta Kelahiran/Ijazah Ahli Waris (Asli & FC)', 'Surat Nikah (Asli & FC)']
                const skim = ['FC KK Calon Suami & Istri', 'FC KTP Calon Suami & Istri', 'Pas Foto 3x4 Calon Suami & Istri', 'Surat Pengantar/Keterangan RT & RW', 'FC Akta Cerai (Bagi Janda/Duda)']
                const situ = ['KTP (Asli & FC)', 'KTP (Asli & FC)', 'Surat Pengantar/Keterangan RT & RW']
                const simb = ['KTP (Asli & FC)', 'FC Surat Tanah Lokasi Bangunan', 'Surat Pengantar/Keterangan RT & RW']

                const showList = (surat) => {
                    surat.forEach(item => {
                        $('#syarat').append(
                            `
                            <ul>
                                <li>${item}</li>
                            </ul>
                            `
                        )
                    });
                }

                if (jenisSurat == 'SPKK') {
                    $('#syarat').html('')
                    showList(spkk)
                }else if(jenisSurat == 'SPIPK'){
                    $('#syarat').html('')
                    showList(spipk)
                }else if(jenisSurat == 'SPKCK'){
                    $('#syarat').html('')
                    showList(spkck)
                }else if(jenisSurat == 'SKKL'){
                    $('#syarat').html('')
                    showList(skkl)
                }else if(jenisSurat == 'SKKM'){
                    $('#syarat').html('')
                    showList(skkm)
                }else if(jenisSurat == 'SKPD'){
                    $('#syarat').html('')
                    showList(skpd)
                }else if(jenisSurat == 'SKKD'){
                    $('#syarat').html('')
                    showList(skkd)
                }else if(jenisSurat == 'SKTM'){
                    $('#syarat').html('')
                    showList(sktm)
                }else if(jenisSurat == 'SKPH'){
                    $('#syarat').html('')
                    showList(skph)
                }else if(jenisSurat == 'SKB'){
                    $('#syarat').html('')
                    showList(skb)
                }else if(jenisSurat == 'SKK'){
                    $('#syarat').html('')
                    showList(skk)
                }else if(jenisSurat == 'SKAW'){
                    $('#syarat').html('')
                    showList(skaw)
                }else if(jenisSurat == 'SKIM'){
                    $('#syarat').html('')
                    showList(skim)
                }else if(jenisSurat == 'SITU'){
                    $('#syarat').html('')
                    showList(situ)
                }else if(jenisSurat == 'SIMB'){
                    $('#syarat').html('')
                    showList(simb)
                }else{
                    console.log('Nothing')
                }
            })
        </script>
    </body>
</html>

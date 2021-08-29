<?php
include('iDi0m45/'.$iDi['u5h8ir5_iDi'].'/i_5u250e.php');
include('p4rc4l35/c4bec3r4.php');
include('p4rc4l35/m3nu-p4.php');
include('p4rc4l35/7i7ul0.php');
?>
    <!-- Main content -->
      <!-- Default box -->
      <div class="card <?= $brr4 ?> card-outline">
        <div class="card-header">
          <h3 class="card-title"><?= lbl_1er7i7u ?></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fa-duotone fa-minus"></i>
            </button>
        

            <!-- 
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fa-duotone fa-times"></i>
            </button>-->
          </div>
        </div>
        <div class="card-body">
         <!-- <button type="button" class="btn btn-success toastsDefaultSuccess">
            Launch Success Toast
          </button>-->
          
        <?php
        /*$txt = "hola mundo";
        $txtE = encrypt($txt);
        $txtD = decrypt($txtE);

        echo $txt.'<br>';
        echo $txtE.'<br>';
        echo $txtD.'<br>';*/

       /* $public_key = file_get_contents('ap4673i/llaves/x0101_pu.pem');
        $private_key = file_get_contents('ap4673i/llaves/x0101_pv.pem');

        $json_data = '{
            "card_number": "1111-1111-1111-1111",
            "csv": "222",
            "exp_month": "03",
            "exp_year": "2016"
        }';*/

       /* print openssl_public_encrypt($json_data, $encrypted, $public_key)."\n";
        echo "Encriptado: <br>".$encrypted."<br>";
        $b64_enc = base64_encode($encrypted);
        echo "Codificado: <br>".$b64_enc."<br>";
        $b64_dec = base64_decode($b64_enc);
        print openssl_private_decrypt($b64_dec, $decrypted, $private_key)."\n";
        echo "Desencriptado: <br>".$decrypted."<br>";*/

        //echo 'Texto Normal <br>';
        $textN = 'Sjciwvw/5VCpWir9rETg6atGWO8PqAyx4kJjOFPtWWGhAnenlBbdAGsRgt3oA4A54lz/koyVpfc0ai/rASE4ENFip9mVGWIP0dmkgpkg77NNWdTVs0oy3bYjN9/B2P 7sPrmMhPp k1Yl0RiaL1JVeO1 0wPhiGEsy8EfelZTftjP437YrYATN0U7/qg6c/TpCSfQ6opGxfNeX1q8FR23K1pFW5XRNtoM9ZvfFJtjoGNVtw/mzsYFih8yqVZumUcrenABUMaaGmnQeB7T2PUJhn0Cz1khmY3LwsKQqp64dGgwccn9a8bQESVhbcVpJXdGIitVCPOqbn3VIjUo5Yc7A==';
        echo $textN.'<br>';
        echo str_replace(" ", "+", $textN);
        echo '<br>';
        //echo 'Texto Encriptado: <br>';
        //$te = ueCry($textN, '69'); 
        //echo $te.'<br>';
        echo 'Texto Desencriptado: <br>';
        echo udCry($textN, '107').'<br>';
        //echo $_SERVER['SERVER_NAME'];

        


?>
    <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jsencrypt/2.3.1/jsencrypt.min.js"></script>
    <script type="text/javascript">
/*mSd/pvt3Xh4+dVj3LSx+tOwH+5S/Te6mMhi/l4/8WAKPnIKTXZySIl1TfBiQG9BGdD5V+6uoD9fBdtvt8WGDjHufPvghWWZc9de7T/m7jlaVfFtfZuFhD1XZdNR7caTw8JnlQPVuqx4A2xom3R/YKYUy89ynKfD0vpTtKRGCzE0=*/

      // Call this code when the page is done loading.
      $(function() {

        // Run a quick encryption/decryption when they click.
        $('#testme').click(function() {

          // Encrypt with the public key...
          /*var encrypt = new JSEncrypt();
          encrypt.setPublicKey($('#pubkey').val());
          var encrypted = encrypt.encrypt($('#input').val());
          alert(encrypted);*/

          // Decrypt with the private key...
          var decrypt = new JSEncrypt();
          decrypt.setPrivateKey($('#privkey').val());
          //var uncrypted = decrypt.decrypt(encrypted);
          var uncrypted = decrypt.decrypt($('#input').val());
          alert(uncrypted)

          // Now a simple check to see if the round-trip worked.
          if (uncrypted == $('#input').val()) {
            alert(uncrypted);
          }
          else {
            alert('Something went wrong....');
          }
        });
      });
    </script>

    <label for="privkey">Private Key</label><br/>
    <textarea id="privkey" rows="15" cols="65">-----BEGIN RSA PRIVATE KEY-----
MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQC06/RXtu/D2297
OjFAZqCB0JJCUmZBbaLVgNp3g4upTbQgsxuNqjHviz3aXnHuipS+/XfWmjYy+U32
UBmdPSVCMQY38FlENXni0sXsoxyxM8EvRMB8PUzHrL8vVOtlRyV6bItZZwTfzZ12
q4S8hBfFYVJG0sxAIvXOpGmRzdyP5V3PNJAi0ZzV9ruGcR2O0KnnC3VBj9FODUgN
StAgSVpm82jX5ZQwSMUiil6+bmA4buaeBYi6EDAyUUu/LW7sX8X3wist/gNhsvXq
rsDTVa9MPzTSJDNXZavqERhITM3jLWlTCxRLBAaTmuwKIIkaxmE+VxbearmBAc/E
cl1Qys6bAgMBAAECggEASJTwrc/iWLzL+K/b2m5RrkKyqpDMHSuSy/ypqJDJkt5t
iUDRqP/CkMtXwSdqpbxK+GRPk3TCkaiaslpoLEC/ldJ9ICv4Y/jgMTNF3C2D8UNG
GWSHpFAjYWfYO3DiDvt/+aFaNj+yIOcoaNdepRKJRtJIY8llz8U2v/QNtkTUW5WI
YcU1F7l3HX/1rfvMnmBX+QGeb266xH+pG2aOSABG+OslFTAVXPfJUGkem62tqJhe
QWxH3s/1g7i1Gvmt8xNXN4UbVBpDIFecQZZi3X+6Q80EAjJFkCcb2Uu+yYrLfOuQ
3MZBr0sbmtOrhPnneZ6iXF6te7TbQxR0vUw1vsESwQKBgQDY9VgD4g9rGvlVIGmS
msaBWEkV+LUXYfytqP9xD7nDAhYsAlE8S6dAzTYCclFSVMVuaHjTmim0RsJ650jy
Qa4hMwenOOvKOOgO5jDSboaKEijXzsIJnjOjjKEsshRgv/4uSatYEKzrMMI7mSQW
+AVoNRlQdMlMmncI9NnQmTABeQKBgQDVeoDWmBed5Ztqs+jTuXQmXQwQ1a0Y//F3
+Lm7OlOLdupD9VlaOD1Ilh0ukMZOSS15DG+GAd+qRTtOD8spi8vVMOG/GzlVctfx
o3LdpclsJ4Q8OjLsH9CWNO+gmdO83XprmbiMxmz3kyXmELvT+cy8K9ryrCEuqd12
mf7LoIU/swKBgCawgdSXcJZyBfqXQBxju3h/bPEdG/YihDPXyk24NzE+YwPQGfp9
p0LYFYSULEpZUafhu4JIoJ1EbRQLwKdq7QmAlyHL9chnI4Lcq+Iq0ZU3rc7mURXz
/1NwFaHp09Z5BnPssUCQILYESO7l3Vi3PAecSHpfiTI+7XFMcLdRSg1JAoGAGU9O
2yJpGmVQidQOtJt2M94wQgazYRVnMYwhqRr/MLfGiowaLeIhEewKRa0QddOjOojI
6CBsvik7IMQqmCBk6D/FY/z8TS8yfwmb4r93JAWDXgigZPJYrpZUGrxiKDAyBXPS
N46G+MtPYPl262jgZybj7IWP4ZJuGVOkq8u6QJUCgYAiYs31/hStEj7pgBy6WMFi
zXA+rA0/reavugmElYDUTbmSUD8Ovv5mzLJ6WmAoTUb06hoUjF6K0Qed8UlKTkx+
uCs3ukRE5hri1vEPcwLdFmJTzfmIK6I1xCY17zpveFxPECprPGTclou+psNaWAtA
Rg1a7jhOjtLn/0LcOxi6tw==
-----END RSA PRIVATE KEY-----</textarea><br/>
    <label for="pubkey">Public Key</label><br/>
    <textarea id="pubkey" rows="15" cols="65">-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAtOv0V7bvw9tvezoxQGag
gdCSQlJmQW2i1YDad4OLqU20ILMbjaox74s92l5x7oqUvv131po2MvlN9lAZnT0l
QjEGN/BZRDV54tLF7KMcsTPBL0TAfD1Mx6y/L1TrZUclemyLWWcE382ddquEvIQX
xWFSRtLMQCL1zqRpkc3cj+VdzzSQItGc1fa7hnEdjtCp5wt1QY/RTg1IDUrQIEla
ZvNo1+WUMEjFIopevm5gOG7mngWIuhAwMlFLvy1u7F/F98IrLf4DYbL16q7A01Wv
TD800iQzV2Wr6hEYSEzN4y1pUwsUSwQGk5rsCiCJGsZhPlcW3mq5gQHPxHJdUMrO
mwIDAQAB
-----END PUBLIC KEY----- </textarea><br/>
    <label for="input">Text to encrypt:</label><br/>
    <textarea id="input" name="input" type="text" rows=4 cols=70>This is a test!</textarea><br/>
    <input id="testme" type="button" value="Test Me!!!" /><br/>



        

        </div>
        <!--/.card-body -->
        <div class="card-footer">
        <?= lbl_1er7i7u ?>
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
<?php
include('p4rc4l35/3p1416e.php');
 ?>
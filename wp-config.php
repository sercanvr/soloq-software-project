<?php
define( 'WP_CACHE', true );
/**
 * WordPress için başlangıç ayar dosyası.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * Bu dosya şu ayarları içerir:
 * 
 * * Veritabanı ayarları
 * * Gizli anahtarlar
 * * Veritabanı tablo ön eki
 * * ABSPATH
 * 
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Veritabanı ayarları - Bu bilgileri servis sağlayıcınızdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'wordpressfirst' );

/** Veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** Veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** Veritabanı sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define( 'DB_COLLATE', '' );

/**#@+
 * Eşsiz doğrulama anahtarları ve tuzlar.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * 
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz.
 * Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'lo} SX0~{:ucEoD}ra+EK;sjKLKNgLuUC/j~UW}C=-&U+kAO^Y6$zN<77LoaCPV.' );
define( 'SECURE_AUTH_KEY',  'Cv,ODl,9HH{FK:yXb~HTEMNVG-Ad23l3:0,WXvnf=M;U%=o>4f,RoIz^A8D)qfLn' );
define( 'LOGGED_IN_KEY',    '?w8-iq2g|80Xj(i,)H8>S46ihb9&U@D=;t1qOR6VCp~1 eBaA,v-dbT,|zKUeV^0' );
define( 'NONCE_KEY',        'hVUU:-Jna)|dVS<Kdgx7{s nA~rtwa7,[G?/4vwe<2{=BzK/&Y$qIWoUZI6/x-!N' );
define( 'AUTH_SALT',        '[MY=a<X[<w@3kCRz$S.rFkSHg->k$v[QYq~Zp2a:O.6txFRKfF:xuo}ONN8rbw S' );
define( 'SECURE_AUTH_SALT', 'ZZ7^Fp:]^L%SrhG4Cx.5[YUZp<2[syOM3NiGN6a:Xe9/gFTPh_|3aRp |k4N=PcG' );
define( 'LOGGED_IN_SALT',   'm]ERbgcCMtfWa/`5#BG8LaTkw/G}Ws3XL4^(l8$<~7T04)JQ_}G?oM5O(C?s.3Ba' );
define( 'NONCE_SALT',       'w`62/<%^6&mf@T:+:v<q*3P2UC}{C_S|<Uq0Kt,[OcLrqNTq/u4/g@MM[?8L3R!S' );

/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri true olarak ayarlayıp geliştirme sırasında hataların ekrana
 * basılmasını sağlayabilirsiniz. Tema ve eklenti geliştiricilerinin geliştirme
 * aşamasında WP_DEBUG kullanmalarını önemle tavsiye ederiz.
 * 
 * Hata ayıklama için kullanabilecek diğer sabitler ile ilgili daha fazla bilgiyi
 * belgelerden edinebilirsiniz.
 * 
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Her türlü özel değeri bu satı ile "Hepsi bu kadar" yazan satır arasına ekleyebilirsiniz. */



/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';
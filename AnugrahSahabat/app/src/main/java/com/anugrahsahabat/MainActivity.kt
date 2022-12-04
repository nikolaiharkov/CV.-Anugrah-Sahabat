package com.anugrahsahabat

import android.content.ActivityNotFoundException
import android.content.Intent
import android.net.Uri
import android.os.Bundle
import android.view.WindowManager
import android.webkit.WebChromeClient
import android.webkit.WebView
import android.webkit.WebViewClient
import android.widget.Toast
import androidx.appcompat.app.AppCompatActivity

class MainActivity : AppCompatActivity() {
    lateinit var webView: WebView

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)
        // menghilangkan header dan statusbar
        supportActionBar?.hide()
        window.setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN, WindowManager.LayoutParams.FLAG_FULLSCREEN)


        webView = findViewById(R.id.WV)
        webView.webViewClient = WebViewClient()
        webView.setWebChromeClient(WebChromeClient())
        //variable for url
        webView.loadUrl("https://58da-158-140-180-53.ap.ngrok.io/cvanugrah/")

        // web setting
        val webSettings = webView.settings

        // mengaktifkan javascript
        webSettings.javaScriptEnabled = true

        // mengaktifkan tool seperti bootstrap
        webSettings.domStorageEnabled = true

        // enable jquery
        webSettings.javaScriptCanOpenWindowsAutomatically = true

        //enable gsap.min.js
        webSettings.allowUniversalAccessFromFileURLs = true

        //err_unknown_url_scheme when whatsapp:// and when user access drive.google.com open in browser
        //enable user for window.print()
        webView.webViewClient = object : WebViewClient() {
            override fun shouldOverrideUrlLoading(view: WebView, url: String): Boolean {
                if (url.startsWith("whatsapp://")) {
                    try {
                        val intent = Intent(Intent.ACTION_VIEW)
                        intent.data = Uri.parse(url)
                        startActivity(intent)
                    } catch (e: ActivityNotFoundException) {
                        Toast.makeText(
                            this@MainActivity,
                            "Whatsapp not installed",
                            Toast.LENGTH_SHORT
                        ).show()
                    }
                    return true
                } else if (url.startsWith("https://drive.google.com")) {
                    val intent = Intent(Intent.ACTION_VIEW)
                    intent.data = Uri.parse(url)
                    startActivity(intent)
                    return true
                    //when user open var url + /invoice/invoice.php open in browser
                } else if (url.startsWith("https://58da-158-140-180-53.ap.ngrok.io/cvanugrah/invoice/Invoice.php")) {
                    val intent = Intent(Intent.ACTION_VIEW)
                    intent.data = Uri.parse(url)
                    startActivity(intent)
                    return true
                }
                return false
            }
        }
    }

    // err_unknown_url_scheme when open whatsapp://

    override fun onBackPressed() {
        if (webView.canGoBack()){
            webView.goBack()
        } else {
            super.onBackPressed()
        }
    }
}
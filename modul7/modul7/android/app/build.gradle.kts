plugins {
    id("com.android.application")
    id("kotlin-android")
    // The Flutter Gradle Plugin must be applied after the Android and Kotlin Gradle plugins.
    id("dev.flutter.flutter-gradle-plugin")
}

android {
    namespace = "com.example.modul7"
    compileSdk = 33 // Gunakan angka eksplisit untuk menghindari error
    ndkVersion = "25.2.9519653" // Sesuaikan dengan NDK yang tersedia

    compileOptions {
        sourceCompatibility = JavaVersion.VERSION_11
        targetCompatibility = JavaVersion.VERSION_11
    }

    kotlinOptions {
        jvmTarget = JavaVersion.VERSION_11.toString()
    }

    defaultConfig {
        applicationId = "com.example.modul7"
        minSdk = 21 // Sesuaikan dengan kebutuhan, minimal 21 untuk Flutter Local Notifications
        targetSdk = 33
        versionCode = 1
        versionName = "1.0"

        // Pastikan ada fitur untuk WorkManager (jika perlu)
        multiDexEnabled = true
    }

    buildTypes {
        release {
            signingConfig = signingConfigs.getByName("debug")
            minifyEnabled = false
            proguardFiles(getDefaultProguardFile("proguard-android-optimize.txt"), "proguard-rules.pro")
        }
    }
}

flutter {
    source = "../.."
}

dependencies {
    implementation("androidx.core:core-ktx:1.9.0")
    implementation("androidx.work:work-runtime-ktx:2.7.1") // Jika menggunakan notifikasi berulang
}

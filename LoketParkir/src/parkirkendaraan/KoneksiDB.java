package parkirkendaraan;

import com.mysql.cj.jdbc.Driver;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.logging.Level;
import java.util.logging.Logger;

public class KoneksiDB {
    public static Connection setKoneksi() {
  Connection koneksi = null;
    try {
//        String konString = "jdbc:mysql://localhost:3306/parkirin";
        String konString = "jdbc:mysql://localhost:3306/parking";
        DriverManager.registerDriver(new Driver());
        koneksi = DriverManager.getConnection(konString, "root", "");
        System.out.println("Koneksi Berhasil");
    } catch (SQLException ex) {
        Logger.getLogger(KoneksiDB.class.getName()).log(Level.SEVERE, null, ex);
        System.out.println("Koneksi Gagal");
        // Tindakan yang sesuai dapat ditambahkan di sini, seperti melempar kembali exception
    }
    return koneksi;
}

    public static int execute(String SQL) {
        int status = 0;
        Connection koneksi = setKoneksi();
        try {
            Statement st = koneksi.createStatement();
            status = st.executeUpdate(SQL);
        } catch (SQLException ex) {
            Logger.getLogger(KoneksiDB.class.getName()).log(Level.SEVERE, null, ex);
            // Tindakan yang sesuai dapat ditambahkan di sini
        }
        return status;
    }

    public static ResultSet executeQuery(String SQL) {
        ResultSet rs = null;
        Connection koneksi = setKoneksi();
        try {
            Statement st = koneksi.createStatement();
            rs = st.executeQuery(SQL);
        } catch (SQLException ex) {
            Logger.getLogger(KoneksiDB.class.getName()).log(Level.SEVERE, null, ex);
            // Tindakan yang sesuai dapat ditambahkan di sini
        }
        return rs;
    }
    
    // Metode ini seharusnya bernama getConnection sesuai dengan konvensi penamaan Java
  
}

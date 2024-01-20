package parkirkendaraan;

import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

public class MainApp {
    public static void main(String[] args) {
        // Menggunakan KoneksiDB
        Connection koneksiDB = KoneksiDB.setKoneksi();
        if (koneksiDB != null) {
            // Koneksi berhasil, Anda dapat melakukan operasi database di sini
            try {
                // Contoh eksekusi query
                String query = "SELECT * FROM petugas";
                ResultSet resultSet = KoneksiDB.executeQuery(query);
                
                // Lakukan sesuatu dengan hasil query
                while (resultSet.next()) {
                    // Ambil data dari resultSet
                    // Contoh: String data = resultSet.getString("nama_kolom");
                }
                
                // Contoh eksekusi update
                // String updateQuery = "UPDATE nama_tabel SET kolom1 = 'nilai_baru' WHERE kondisi";
                // int updateStatus = KoneksiDB.execute(updateQuery);
            } catch (SQLException ex) {
                ex.printStackTrace();
            }
        }

        // Menggunakan file_koneksi
        try {
            Connection koneksiFile = file_koneksi.GetConnection();
            if (koneksiFile != null) {
                // Koneksi berhasil, Anda dapat melakukan operasi database di sini
                // Contoh: Statement statement = koneksiFile.createStatement();
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
    }
}

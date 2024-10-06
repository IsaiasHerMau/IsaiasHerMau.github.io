package conexion;

import java.sql.DriverManager;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;

public class Conexion {
    
    private static final String url = "jdbc:mysql://localhost:3306/sistema_solar?serverTimezone=UTC";
    private static final String user = "root";
    private static final String password = "";
    
    public static void main(String[] args) {
        // Aquí puedes llamar a registrarUsuario con algunos datos de prueba
        registrarUsuario("Juan", "Pérez", "juan.perez@example.com", "contraseña123");
    }
    
    public static void registrarUsuario(String nombre, String apellido, String email, String password) {
        java.sql.Connection conexion = null;
        java.sql.PreparedStatement ps = null;

        try {
            // Establecer la conexión
            conexion = DriverManager.getConnection(url, user, password);
            System.out.println("Conexión correcta");

            // Consulta SQL para insertar un nuevo usuario
            String sql = "INSERT INTO usuarios (nombre, apellido, email, password) VALUES (?, ?, ?, ?)";
            ps = conexion.prepareStatement(sql);

            // Asignar los valores a la consulta
            ps.setString(1, nombre);
            ps.setString(2, apellido);
            ps.setString(3, email);
            ps.setString(4, password);

            // Ejecutar la inserción
            int filasInsertadas = ps.executeUpdate();

            if (filasInsertadas > 0) {
                System.out.println("Usuario registrado con éxito");
            } else {
                System.out.println("Error al registrar el usuario");
            }

        } catch (SQLException ex) {
            Logger.getLogger(Conexion.class.getName()).log(Level.SEVERE, null, ex);
        } finally {
            // Cerrar recursos
            try {
                if (ps != null) ps.close();
                if (conexion != null) conexion.close();
            } catch (SQLException e) {
                Logger.getLogger(Conexion.class.getName()).log(Level.SEVERE, null, e);
            }
        }
    }
}

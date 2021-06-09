/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package parcialfinalredes;

import com.panamahitek.ArduinoException;

import com.panamahitek.PanamaHitek_Arduino;
import java.io.IOException;
import java.util.logging.Level;
import java.util.logging.Logger;
import jssc.SerialPortEvent;
import jssc.SerialPortEventListener;
import jssc.SerialPortException;

/**
 *
 * @author Incadi
 */
public class ParcialFinalRedes {

    private static PanamaHitek_Arduino ino = new PanamaHitek_Arduino();
    private static final SerialPortEventListener listener = new SerialPortEventListener() {
        @Override
        public void serialEvent(SerialPortEvent spe) {
            try {
                if (ino.isMessageAvailable()) {
                    String mensaje = ino.printMessage();
                    System.out.println(mensaje);    
                    Post client = new Post(mensaje);                    
                }
            } catch (SerialPortException | ArduinoException ex) {
                Logger.getLogger(ParcialFinalRedes.class.getName()).log(Level.SEVERE, null, ex);
            } catch (IOException ex) {
                Logger.getLogger(ParcialFinalRedes.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
    };

    public static void main(String[] args) {
     
        try {
            
            ino.arduinoRX("COM4", 9600, listener);
        } catch (ArduinoException | SerialPortException ex) {
            Logger.getLogger(ParcialFinalRedes.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
}

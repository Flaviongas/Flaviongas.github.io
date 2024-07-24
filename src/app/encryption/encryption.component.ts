import { Component } from '@angular/core';
import * as CryptoJS from 'crypto-js';
let i = 1;
@Component({
  selector: 'app-encryption',
  standalone: true,
  imports: [],
  templateUrl: './encryption.component.html',
  styleUrl: './encryption.component.css',
})
export class EncryptionComponent {
  test() {
    let count = i;
    console.log('First count');
    console.log(count);
    Encrypt(count);
    function Encrypt(count: number) {
      var text = (<HTMLInputElement>document.getElementById('L3')).value;
      var key = '3136313934354a55';

      const hash = CryptoJS.enc.Utf8.parse(key);
      const ciphertext = CryptoJS.AES.encrypt(text, hash, {
        mode: CryptoJS.mode.ECB,
      });
      let encrypted = ciphertext.toString();

      if (count % 5 == 0) {
        (<HTMLInputElement>document.getElementById('answer-2')).value =
          base64ToHex(encrypted);
        count++;
      } else {
        count++;
        var si = CryptoJS.AES.encrypt(
          Math.random().toString(36).slice(2),
          Math.random().toString(36).slice(2),
        )
          .toString()
          .toLowerCase();
        (<HTMLInputElement>document.getElementById('answer-2')).value =
          si.substr(14);
        console.log(count);
      }
    }
    function base64ToHex(str: string) {
      const raw = atob(str);
      let result = '';
      for (let i = 0; i < raw.length; i++) {
        const hex = raw.charCodeAt(i).toString(16);
        result += hex.length === 2 ? hex : '0' + hex;
      }
      return result;
    }
    i++;
  }
}

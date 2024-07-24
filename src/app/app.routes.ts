import { Routes } from '@angular/router';
import { MainComponent } from './main/main.component';
import { EncryptionComponent } from './encryption/encryption.component';
export const routes: Routes = [
  { path: 'main', component: MainComponent },
  { path: 'encryption', component: EncryptionComponent },
];

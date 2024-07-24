import { Component, OnInit } from '@angular/core';
import { RouterOutlet, RouterLink, RouterLinkActive } from '@angular/router';
import { CommonModule } from '@angular/common';
import { UserServiceService } from '../user-service.service';
interface User {
  quote: string;
  author: string;
  category: string;
}

@Component({
  selector: 'app-main',
  standalone: true,
  imports: [],
  templateUrl: './main.component.html',
  styleUrl: './main.component.css',
})
export class MainComponent implements OnInit {
  users: User[];
  constructor(private UserServiceService: UserServiceService) {}

  ngOnInit() {
    this.fetchUsers();
  }
  fetchUsers() {
    console.log('start');

    this.UserServiceService.fetchUsers().subscribe(
      (response: any) => {
        console.log('success');
        console.log(response);
        this.users = response;
      },
      (error: any) => {
        console.log('error');
        console.error(error);
      },
    );
  }
}

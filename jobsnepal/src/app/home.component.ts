import { Component, OnInit }        from '@angular/core';
import { ActivatedRoute, ParamMap } from '@angular/router';
import { Location }                 from '@angular/common';
import { UserService } from './service/user.service';



@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styles: ['']
})
export class HomeComponent implements OnInit{
    title = 'Jobs';
    
      image = '/assets/image/job.jpg';
      images='/assets/image';
      currentUser: UserService;
      
  
      constructor(private userService: UserService) {
          this.currentUser = JSON.parse(localStorage.getItem('currentUser'));
      }
    
    ngOnInit(): void {
      this.loadAllUsers();
      
    }
    private loadAllUsers() {
      this.userService.getAll().subscribe(res => console.log(res));
  }
}	
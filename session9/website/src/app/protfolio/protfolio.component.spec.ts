import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ProtfolioComponent } from './protfolio.component';

describe('ProtfolioComponent', () => {
  let component: ProtfolioComponent;
  let fixture: ComponentFixture<ProtfolioComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [ProtfolioComponent]
    });
    fixture = TestBed.createComponent(ProtfolioComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

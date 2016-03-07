

% subplot(4,1,1),plot(B6(:,4:6),'DisplayName','B6(:,4:6)')
% title('Eating Burger')
% subplot(4,1,2),plot(S6(:,4:6),'DisplayName','S6(:,4:6)')
% title('Eating Soup')
% subplot(4,1,3),plot(N6(:,4:6),'DisplayName','N6(:,4:6)')
% title('Eating Noodle')
% subplot(4,1,4),plot(K6(:,4:6),'DisplayName','K6(:,4:6)')
% title('Eating with Knife')
% 
% 
% figure()
% subplot(4,1,1),plot(B6(:,1:3),'DisplayName','B6(:,1:3)')
% title('Eating Burger')
% subplot(4,1,2),plot(S6(:,1:3),'DisplayName','S6(:,1:3)')
% title('Eating Soup')
% subplot(4,1,3),plot(N6(:,1:3),'DisplayName','N6(:,1:3)')
% title('Eating Noodle')
% subplot(4,1,4),plot(K6(:,1:3),'DisplayName','K6(:,1:3)')
% title('Eating with Knife')


subplot(6,1,1),plot(soup(:,1))
title('Acceleration on X axis')
subplot(6,1,2),plot(soup(:,2))
title('Acceleration on Y axis')
subplot(6,1,3),plot(soup(:,3))
title('Acceleration on Z axis')
subplot(6,1,4),plot(soup(:,4))
title('Gyrostation on X axis')
subplot(6,1,5),plot(soup(:,5))
title('Gyrostation on Y axis')
subplot(6,1,6),plot(soup(:,6))
title('Gyrostation on Z axis')



import app from 'flarum/app';

app.initializers.add('app/ads', () => {
  console.log('Hello, admin!');
});

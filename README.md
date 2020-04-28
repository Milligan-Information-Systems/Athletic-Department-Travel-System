# Athletic-Department-Travel-System

## Acceptance Tests
We used [Codeception](https://codeception.com/docs/01-Introduction) as engine for the acceptance tests.

### Running Instructions

_This assumes you have Docker installed._

1. `docker-compose run adts composer install`.
2. `docker-compose run adts php vendor/bin/codecept run --steps`.

Optimizing .net applications

## Reduce database calls
- Use caching or data dictonaries were possible
- this has upper limits you don't want to pull millions of rows into memory.
- optimize entity framework, for read only use .AsNoTracking();

## Async
- when you do need to call database use async calls to help app server processor.
- when used across applications helps the entire app server load.

## Business Logic in App vs in Database
- Pull data once and process in memory

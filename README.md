## About The Project

Sample project to manage Google Calendar API using PHP

## Required
Setup Google Cloud to use Calendar API. Follow [https://developers.google.com/calendar/api/guides/overview](https://developers.google.com/calendar/api/guides/overview)

Configure Configure OAuth consent [https://developers.google.com/workspace/guides/configure-oauth-consent#configure_oauth_consent](https://developers.google.com/workspace/guides/configure-oauth-consent#configure_oauth_consent)

`client_secret.json` for OAuth 2.0 Client Credentials

Add `http://{projectroot}/login` example `http://localhost/intuji-assignment/login` in Authorized redirect URIs of `client_secret`

## Instruction to run project
Install Packages using `composer`
Rename `.env_sample` to `.env`
Add `client_secret.json` in root folder of project

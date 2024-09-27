<?php

namespace VanDmade\Syncra\Google;

class Scopes
{

    /***** AI Platform Training & Prediction API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    const CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // View your data across Google Cloud services and see the email address of your Google Account
    const CLOUDPLATFORM_READONLY = 'https://www.googleapis.com/auth/cloud-platform.read-only';

    /***** Access Approval API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Access Context Manager API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Ad Exchange Buyer API II, v2beta1 *****/
    // Manage your Ad Exchange buyer account configuration
    const ADEXCHANGE_BUYER = 'https://www.googleapis.com/auth/adexchange.buyer';

    /***** AdMob API, v1 *****/
    // See your AdMob data
    const ADMOB_READONLY = 'https://www.googleapis.com/auth/admob.readonly';
    // See your AdMob data
    const ADMOB_REPORT = 'https://www.googleapis.com/auth/admob.report';

    /***** AdSense Host API, v4.1 *****/
    // View and manage your AdSense host data and associated accounts
    const ADSENSEHOST = 'https://www.googleapis.com/auth/adsensehost';

    /***** Admin SDK API, v1 *****/
    // View audit reports for your G Suite domain
    const ADMIN_REPORTS_AUDIT_READONLY = 'ttps://www.googleapis.com/auth/admin.reports.audit.readonly';
    // View usage reports for your G Suite domain
    const ADMIN_REPORTS_USAGE_READONLY = 'https://www.googleapis.com/auth/admin.reports.usage.readonly';

    /***** Admin SDK API, v1 *****/
    // View and manage data transfers between users in your organization
    const ADMIN_DATETRANSFER = 'https://www.googleapis.com/auth/admin.datatransfer';
    // View data transfers between users in your organization
    const ADMIN_DATETRANSFER_READONLY = 'https://www.googleapis.com/auth/admin.datatransfer.readonly';

    /***** Admin SDK API, v1 *****/
    // See, add, edit, and permanently delete the printers that your organization can use with Chrome
    const ADMIN_CHROME_PRINTERS = 'https://www.googleapis.com/auth/admin.chrome.printers';
    // See the printers that your organization can use with Chrome
    const ADMIN_CHROME_PRINTERS_READONLY = 'https://www.googleapis.com/auth/admin.chrome.printers.readonly';
    // View and manage customer related information
    const ADMIN_DIRECTORY_CUSTOMER = 'https://www.googleapis.com/auth/admin.directory.customer';
    // View customer related information
    const ADMIN_DIRECTORY_CUSTOMER_READONLY = 'https://www.googleapis.com/auth/admin.directory.customer.readonly';
    // View and manage your Chrome OS devices' metadata
    const ADMIN_DIRECTORY_DEVICE_CHROMEOS = 'https://www.googleapis.com/auth/admin.directory.device.chromeos';
    // View your Chrome OS devices' metadata
    const ADMIN_DIRECTORY_DEVICE_CHROMEOS_READONLY = 'https://www.googleapis.com/auth/admin.directory.device.chromeos.readonly';
    // View and manage your mobile devices' metadata
    const ADMIN_DIRECTORY_DEVICE_MOBILE = 'https://www.googleapis.com/auth/admin.directory.device.mobile';
    // Manage your mobile devices by performing administrative tasks
    const ADMIN_DIRECTORY_DEVICE_MOBILE_ACTION = 'https://www.googleapis.com/auth/admin.directory.device.mobile.action';
    // View your mobile devices' metadata
    const ADMIN_DIRECTORY_DEVICE_MOBILE_READONLY = 'https://www.googleapis.com/auth/admin.directory.device.mobile.readonly';
    // View and manage the provisioning of domains for your customers
    const ADMIN_DIRECTORY_DOMAIN = 'https://www.googleapis.com/auth/admin.directory.domain';
    // View domains related to your customers
    const ADMIN_DIRECTORY_DOMAIN_READONLY = 'https://www.googleapis.com/auth/admin.directory.domain.readonly';
    // View and manage the provisioning of groups on your domain
    const ADMIN_DIRECTORY_GROUP = 'https://www.googleapis.com/auth/admin.directory.group';
    // View and manage group subscriptions on your domain
    const ADMIN_DIRECTORY_GROUP_MEMBER = 'https://www.googleapis.com/auth/admin.directory.group.member';
    // View group subscriptions on your domain
    const ADMIN_DIRECTORY_GROUP_MEMBER_READONLY = 'https://www.googleapis.com/auth/admin.directory.group.member.readonly';
    // View groups on your domain
    const ADMIN_DIRECTORY_GROUP_READONLY = 'https://www.googleapis.com/auth/admin.directory.group.readonly';
    // View and manage organization units on your domain
    const ADMIN_DIRECTORY_ORGUNIT = 'https://www.googleapis.com/auth/admin.directory.orgunit';
    // View organization units on your domain
    const ADMIN_DIRECTORY_ORGUNIT_READONLY = 'https://www.googleapis.com/auth/admin.directory.orgunit.readonly';
    // View and manage the provisioning of calendar resources on your domain
    const ADMIN_DIRECTORY_RESOURCE_CALENDAR = 'https://www.googleapis.com/auth/admin.directory.resource.calendar';
    // View calendar resources on your domain
    const ADMIN_DIRECTORY_RESOURCE_CALENDAR_READONLY = 'https://www.googleapis.com/auth/admin.directory.resource.calendar.readonly';
    // Manage delegated admin roles for your domain
    const ADMIN_DIRECTORY_ROLEMANAGEMENT = 'https://www.googleapis.com/auth/admin.directory.rolemanagement';
    // View delegated admin roles for your domain
    const ADMIN_DIRECTORY_ROLEMANAGEMENT_READONLY = 'https://www.googleapis.com/auth/admin.directory.rolemanagement.readonly';
    // View and manage the provisioning of users on your domain
    const ADMIN_DIRECTORY_USER = 'https://www.googleapis.com/auth/admin.directory.user';
    // View and manage user aliases on your domain
    const ADMIN_DIRECTORY_USER_ALIAS = 'https://www.googleapis.com/auth/admin.directory.user.alias';
    // View user aliases on your domain
    const ADMIN_DIRECTORY_USER_ALIAS_READONLY = 'https://www.googleapis.com/auth/admin.directory.user.alias.readonly';
    // See info about users on your domain
    const ADMIN_DIRECTORY_USER_READONLY = 'https://www.googleapis.com/auth/admin.directory.user.readonly';
    // Manage data access permissions for users on your domain
    const ADMIN_DIRECTORY_USER_SECURITY = 'https://www.googleapis.com/auth/admin.directory.user.security';
    // View and manage the provisioning of user schemas on your domain
    const ADMIN_DIRECTORY_USERSCHEMA = 'https://www.googleapis.com/auth/admin.directory.userschema';
    // View user schemas on your domain
    const ADMIN_DIRECTORY_USERSCHEMA_READONLY = 'https://www.googleapis.com/auth/admin.directory.userschema.readonly';
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Analytics Reporting API, v4 *****/
    // View and manage your Google Analytics data
    const ANALYTICS = 'https://www.googleapis.com/auth/analytics';
    // See and download your Google Analytics data

    /***** Android Management API, v1 *****/
    CONST ANALYTICS_READONLY = 'https://www.googleapis.com/auth/analytics.readonly';
    // Manage Android devices and apps for your customers
    const ANDROIDMANAGEMENT = 'https://www.googleapis.com/auth/androidmanagement';

    /***** Apigee API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** App Engine Admin API, v1 *****/
    // View and manage your applications deployed on Google App Engine
    const APPENGINE_ADMIN = 'https://www.googleapis.com/auth/appengine.admin';
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // View your data across Google Cloud services and see the email address of your Google Account
    // CLOUDPLATFORM_READONLY = 'https://www.googleapis.com/auth/cloud-platform.read-only';

    /***** Apps Script API, v1 *****/
    // Read, compose, send, and permanently delete all your email from Gmail
    const MAIL = 'https://mail.google.com/';
    // See, edit, share, and permanently delete all the calendars you can access using Google Calendar
    const CALENDAR_FEEDS = 'https://www.google.com/calendar/feeds';
    // See, edit, download, and permanently delete your contacts
    const M8_FEEDS = 'https://www.google.com/m8/feeds';
    // View and manage the provisioning of groups on your domain
    // ADMIN_DIRECTORY_GROUP = 'https://www.googleapis.com/auth/admin.directory.group';
    // View and manage the provisioning of users on your domain
    // ADMIN_DIRECTORY_USER = 'https://www.googleapis.com/auth/admin.directory.user';
    // See, edit, create, and delete all your Google Docs documents
    const DOCUMENTS = 'https://www.googleapis.com/auth/documents';
    // See, edit, create, and delete all of your Google Drive files
    const DRIVE = 'https://www.googleapis.com/auth/drive';
    // View and manage your forms in Google Drive
    const FORMS = 'https://www.googleapis.com/auth/forms';
    // View and manage forms that this application has been installed in
    const FORMS_CURRENTONLY = 'https://www.googleapis.com/auth/forms.currentonly';
    // View and manage your Google Groups
    const GROUPS = 'https://www.googleapis.com/auth/groups';
    // Create and update Google Apps Script deployments
    const SCRIPT_DEPLOYMENTS = 'https://www.googleapis.com/auth/script.deployments';
    // View Google Apps Script deployments
    const SCRIPT_DEPLOYMENTS_READONLY = 'https://www.googleapis.com/auth/script.deployments.readonly';
    // View Google Apps Script project's metrics
    const SCRIPT_METRICS = 'https://www.googleapis.com/auth/script.metrics';
    // View Google Apps Script processes
    const SCROPT_PROCESSES = 'https://www.googleapis.com/auth/script.processes';
    // Create and update Google Apps Script projects
    const SCROPT_PROJECTS = 'https://www.googleapis.com/auth/script.projects';
    // View Google Apps Script projects
    const SCROPT_PROJECTS_READONLY = 'https://www.googleapis.com/auth/script.projects.readonly';
    // See, edit, create, and delete all your Google Sheets spreadsheets
    const SPREADSHEETS = 'https://www.googleapis.com/auth/spreadsheets';
    // See your primary Google Account email address
    const USERINFO_EMAIL = 'https://www.googleapis.com/auth/userinfo.email';

    /***** BigQuery API, v2 *****/
    // View and manage your data in Google BigQuery and see the email address for your Google Account
    const BIGQUERY = 'https://www.googleapis.com/auth/bigquery';
    // Insert data into Google BigQuery
    const BIGQUERY_INSERTDATE = 'https://www.googleapis.com/auth/bigquery.insertdata';
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // View your data across Google Cloud services and see the email address of your Google Account
    // CLOUDPLATFORM_READONLY = 'https://www.googleapis.com/auth/cloud-platform.read-only';
    // Manage your data and permissions in Cloud Storage and see the email address for your Google Account
    const DEVSTORAGE_FULLCONTROL = 'https://www.googleapis.com/auth/devstorage.full_control';
    // View your data in Google Cloud Storage
    const DEVSTORAGE_READONLY = 'https://www.googleapis.com/auth/devstorage.read_only';
    // Manage your data in Cloud Storage and see the email address of your Google Account
    const DEVSTORAGE_READWRITE = 'https://www.googleapis.com/auth/devstorage.read_write';

    /***** BigQuery Connection API, v1beta1 *****/
    // View and manage your data in Google BigQuery and see the email address for your Google Account
    // BIGQUERY = 'https://www.googleapis.com/auth/bigquery';
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** BigQuery Data Transfer API, v1 *****/
    // View and manage your data in Google BigQuery and see the email address for your Google Account
    // BIGQUERY = 'https://www.googleapis.com/auth/bigquery';
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // View your data across Google Cloud services and see the email address of your Google Account
    // CLOUDPLATFORM_READONLY = 'https://www.googleapis.com/auth/cloud-platform.read-only';

    /***** BigQuery Reservation API, v1 *****/
    // View and manage your data in Google BigQuery and see the email address for your Google Account
    // BIGQUERY = 'https://www.googleapis.com/auth/bigquery';
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Binary Authorization API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Blogger API, v3 *****/
    // Manage your Blogger account
    const BLOGGER = 'https://www.googleapis.com/auth/blogger';
    // View your Blogger account
    const BLOGGER_READONLY = 'https://www.googleapis.com/auth/blogger.readonly';

    /***** Books API, v1 *****/
    // Manage your books
    const BOOKS = 'https://www.googleapis.com/auth/books';

    /***** Calendar API, v3 *****/
    // See, edit, share, and permanently delete all the calendars you can access using Google Calendar
    const CALENDAR = 'https://www.googleapis.com/auth/calendar';
    // View and edit events on all your calendars
    const CALENDAR_EVENTS = 'https://www.googleapis.com/auth/calendar.events';
    // View events on all your calendars
    const CALENDAR_EVENTS_READONLY = 'https://www.googleapis.com/auth/calendar.events.readonly';
    // See and download any calendar you can access using your Google Calendar
    const CALENDAR_READONLY = 'https://www.googleapis.com/auth/calendar.readonly';
    // View your Calendar settings
    const CALENDAR_SETTINGS_READONLY = 'https://www.googleapis.com/auth/calendar.settings.readonly';

    /***** Campaign Manager 360 API, v4 *****/
    // Manage DoubleClick Digital Marketing conversions
    const DDMCONVERSIONS = 'https://www.googleapis.com/auth/ddmconversions';
    // View and manage DoubleClick for Advertisers reports
    const DFAREPORTING = 'https://www.googleapis.com/auth/dfareporting';
    // View and manage your DoubleClick Campaign Manager's (DCM) display ad campaigns
    const DFATRAFFICKING = 'https://www.googleapis.com/auth/dfatrafficking';

    /***** Cloud Asset API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Cloud Bigtable Admin API, v2 *****/
    // Administer your Cloud Bigtable tables and clusters
    const BIGTABLE_ADMIN = 'https://www.googleapis.com/auth/bigtable.admin';
    // Administer your Cloud Bigtable clusters
    const BIGTABLE_ADMIN_CLUSTER = 'https://www.googleapis.com/auth/bigtable.admin.cluster';
    // Administer your Cloud Bigtable clusters
    const BIGTABLE_ADMIN_INSTANCE = 'https://www.googleapis.com/auth/bigtable.admin.instance';
    // Administer your Cloud Bigtable tables
    const BIGTABLE_ADMIN_TABLE = 'https://www.googleapis.com/auth/bigtable.admin.table';
    // Administer your Cloud Bigtable tables and clusters
    const CLOUDBIGTABLE_ADMIN = 'https://www.googleapis.com/auth/cloud-bigtable.admin';
    // Administer your Cloud Bigtable clusters
    const CLOUDBIGTABLE_ADMIN_CLUSTER = 'https://www.googleapis.com/auth/cloud-bigtable.admin.cluster';
    // Administer your Cloud Bigtable tables
    const CLOUDBIGTABLE_ADMIN_TABLE = 'https://www.googleapis.com/auth/cloud-bigtable.admin.table';
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // View your data across Google Cloud services and see the email address of your Google Account
    // CLOUDPLATFORM_READONLY = 'https://www.googleapis.com/auth/cloud-platform.read-only';

    /***** Cloud Billing API, v1 *****/
    // View and manage your Google Cloud Platform billing accounts
    const CLOUDBILLING = 'https://www.googleapis.com/auth/cloud-billing';
    // View your Google Cloud Platform billing accounts
    const CLOUDBILLING_READONLY = 'https://www.googleapis.com/auth/cloud-billing.readonly';
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Cloud Build API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Cloud Composer API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Cloud DNS API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // View your data across Google Cloud services and see the email address of your Google Account
    // CLOUDPLATFORM_READONLY = 'https://www.googleapis.com/auth/cloud-platform.read-only';
    // View your DNS records hosted by Google Cloud DNS
    const NDEV_CLOUDDNS_READONLY = 'https://www.googleapis.com/auth/ndev.clouddns.readonly';
    // View and manage your DNS records hosted by Google Cloud DNS
    const NDEV_CLOUDDNS_READWRITE = 'https://www.googleapis.com/auth/ndev.clouddns.readwrite';

    /***** Cloud Data Loss Prevention (DLP) API, v2 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Cloud Dataproc API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Cloud Datastore API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // View and manage your Google Cloud Datastore data
    const DATASTORE = 'https://www.googleapis.com/auth/datastore';

    /***** Cloud Debugger API, v2 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // Use Stackdriver Debugger
    const CLOUDDEBUGGER = 'https://www.googleapis.com/auth/cloud_debugger';

    /***** Cloud Deployment Manager V2 API, v2 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // View your data across Google Cloud services and see the email address of your Google Account
    // CLOUDPLATFORM_READONLY = 'https://www.googleapis.com/auth/cloud-platform.read-only';
    // View and manage your Google Cloud Platform management resources and deployment status information
    const NDEV_CLOUDMAN = 'https://www.googleapis.com/auth/ndev.cloudman';
    // View your Google Cloud Platform management resources and deployment status information
    const NDEV_CLOUDMAN_READONLY = 'https://www.googleapis.com/auth/ndev.cloudman.readonly';

    /***** Cloud Filestore API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Cloud Firestore API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // View and manage your Google Cloud Datastore data
    // DATASTORE = 'https://www.googleapis.com/auth/datastore';

    /***** Cloud Healthcare API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Cloud Identity API, v1 *****/
    // See your device details
    const CLOUDIDENTITY_DEVICES_LOOKUP = 'https://www.googleapis.com/auth/cloud-identity.devices.lookup';
    // See, change, create, and delete any of the Cloud Identity Groups that you can access, including the members of each group
    const CLOUDIDENTITY_GROUPS = 'https://www.googleapis.com/auth/cloud-identity.groups';
    // See any Cloud Identity Groups that you can access, including group members and their emails
    const CLOUDIDENTITY_GROUPS_READONLY = 'https://www.googleapis.com/auth/cloud-identity.groups.readonly';
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Cloud Identity-Aware Proxy API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Cloud Key Management Service (KMS) API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // View and manage your keys and secrets stored in Cloud Key Management Service
    const CLOUDKMS = 'https://www.googleapis.com/auth/cloudkms';

    /***** Cloud Life Sciences API, v2beta *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Cloud Logging API, v2 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // View your data across Google Cloud services and see the email address of your Google Account
    // CLOUDPLATFORM_READONLY = 'https://www.googleapis.com/auth/cloud-platform.read-only';
    // Administrate log data for your projects
    const LOGGING_ADMIN = 'https://www.googleapis.com/auth/logging.admin';
    // View log data for your projects
    const LOGGING_READ = 'https://www.googleapis.com/auth/logging.read';
    // Submit log data for your projects
    const LOGGIN_WRITE = 'https://www.googleapis.com/auth/logging.write';

    /***** Cloud Monitoring API, v3 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // View and write monitoring data for all of your Google and third-party Cloud and API projects
    const MONITORING = 'https://www.googleapis.com/auth/monitoring';
    // View monitoring data for all of your Google Cloud and third-party projects
    const MONITORING_READ = 'https://www.googleapis.com/auth/monitoring.read';
    // Publish metric data to your Google Cloud projects
    const MONITORING_WRITE = 'https://www.googleapis.com/auth/monitoring.write';

    /***** Cloud Natural Language API, v1 *****/
    // Apply machine learning models to reveal the structure and meaning of text
    const CLOUDLANGUAGE = 'https://www.googleapis.com/auth/cloud-language';
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Cloud OS Login API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // View your data across Google Cloud services and see the email address of your Google Account
    // CLOUDPLATFORM_READONLY = 'https://www.googleapis.com/auth/cloud-platform.read-only';
    // View and manage your Google Compute Engine resources
    const COMPUTE = 'https://www.googleapis.com/auth/compute';
    // View your Google Compute Engine resources
    const COMPUTE_READONLY = 'https://www.googleapis.com/auth/compute.readonly';

    /***** Cloud Profiler API, v2 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // View and write monitoring data for all of your Google and third-party Cloud and API projects
    // MONITORING = 'https://www.googleapis.com/auth/monitoring';
    // Publish metric data to your Google Cloud projects
    // MONITORING_WRITE = 'https://www.googleapis.com/auth/monitoring.write';

    /***** Cloud Pub/Sub API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // View and manage Pub/Sub topics and subscriptions
    const PUBSUB = 'https://www.googleapis.com/auth/pubsub';

    /***** Cloud Resource Manager API, v3 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // View your data across Google Cloud services and see the email address of your Google Account
    // CLOUDPLATFORM_READONLY = 'https://www.googleapis.com/auth/cloud-platform.read-only';

    /***** Cloud Runtime Configuration API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // Manage your Google Cloud Platform services' runtime configuration
    const CLOUDRUNTIMECONFIG = 'https://www.googleapis.com/auth/cloudruntimeconfig';

    /***** Cloud SQL Admin API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // Manage your Google SQL Service instances
    const SQLSERVICE_ADMIN = 'https://www.googleapis.com/auth/sqlservice.admin';

    /***** Cloud Scheduler API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Cloud Search API, v1 *****/
    // Index and serve your organization's data with Cloud Search
    const CLOUDSEARCH = 'https://www.googleapis.com/auth/cloud_search';
    // Index and serve your organization's data with Cloud Search
    const CLOUDSEARCH_DEBUG = 'https://www.googleapis.com/auth/cloud_search.debug';
    // Index and serve your organization's data with Cloud Search
    const CLOUDSEARCH_INDEXING = 'https://www.googleapis.com/auth/cloud_search.indexing';
    // Search your organization's data in the Cloud Search index
    const CLOUDSEARCH_QUERY = 'https://www.googleapis.com/auth/cloud_search.query';
    // Index and serve your organization's data with Cloud Search
    const CLOUDSEARCH_SETTINGS = 'https://www.googleapis.com/auth/cloud_search.settings';
    // Index and serve your organization's data with Cloud Search
    const CLOUDSEARCH_SETTINGS_INDEXING = 'https://www.googleapis.com/auth/cloud_search.settings.indexing';
    // Index and serve your organization's data with Cloud Search
    const CLOUDSEARCH_SETTINGS_QUERY = 'https://www.googleapis.com/auth/cloud_search.settings.query';
    // Index and serve your organization's data with Cloud Search
    const CLOUDSEARCH_STATS = 'https://www.googleapis.com/auth/cloud_search.stats';
    // Index and serve your organization's data with Cloud Search
    const CLOUDSEARCH_STATS_INDEXING = 'https://www.googleapis.com/auth/cloud_search.stats.indexing';

    /***** Cloud Shell API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Cloud Source Repositories API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // Manage your source code repositories
    const SOURCE_FULLCONTROL = 'https://www.googleapis.com/auth/source.full_control';
    // View the contents of your source code repositories
    const SOURCE_READONLY = 'https://www.googleapis.com/auth/source.read_only';
    // Manage the contents of your source code repositories
    const SOURCE_READWRITE = 'https://www.googleapis.com/auth/source.read_write';

    /***** Cloud Spanner API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // Administer your Spanner databases
    const SPANNER_ADMIN = 'https://www.googleapis.com/auth/spanner.admin';
    // View and manage the contents of your Spanner databases
    const SPANNER_DATE = 'https://www.googleapis.com/auth/spanner.data';

    /***** Cloud Speech-to-Text API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Cloud Storage JSON API, v1 *****/
    // View and manage your data across Google Cloud Platform services
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // View your data across Google Cloud Platform services
    // CLOUDPLATFORM_READONLY = 'https://www.googleapis.com/auth/cloud-platform.read-only';
    // Manage your data and permissions in Cloud Storage and see the email address for your Google Account
    // DEVSTORAGE_FULLCONTROL = 'https://www.googleapis.com/auth/devstorage.full_control';
    // View your data in Google Cloud Storage
    // DEVSTORAGE_READONLY = 'https://www.googleapis.com/auth/devstorage.read_only';
    // Manage your data in Cloud Storage and see the email address of your Google Account
    // DEVSTORAGE_READWRITE = 'https://www.googleapis.com/auth/devstorage.read_write';

    /***** Cloud Tasks API, v2 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Cloud Testing API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // View your data across Google Cloud services and see the email address of your Google Account
    // CLOUDPLATFORM_READONLY = 'https://www.googleapis.com/auth/cloud-platform.read-only';

    /***** Cloud Text-to-Speech API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Cloud Tool Results API, v1beta3 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Cloud Trace API, v2 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // Write Trace data for a project or application
    const TRACE_APPEND = 'https://www.googleapis.com/auth/trace.append';

    /***** Cloud Translation API, v3 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // Translate text from one language to another using Google Translate
    const CLOUDTRANSLATION = 'https://www.googleapis.com/auth/cloud-translation';

    /***** Cloud Video Intelligence API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Cloud Vision API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // Apply machine learning models to understand and label images
    const CLOUDVISION = 'https://www.googleapis.com/auth/cloud-vision';

    /***** Compute Engine API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // View and manage your Google Compute Engine resources
    // COMPUTE = 'https://www.googleapis.com/auth/compute';
    // View your Google Compute Engine resources
    // COMPUTE_READONLY = 'https://www.googleapis.com/auth/compute.readonly';
    // Manage your data and permissions in Cloud Storage and see the email address for your Google Account
    // DEVSTORAGE_FULLCONTROL = 'https://www.googleapis.com/auth/devstorage.full_control';
    // View your data in Google Cloud Storage
    // DEVSTORAGE_READONLY = 'https://www.googleapis.com/auth/devstorage.read_only';
    // Manage your data in Cloud Storage and see the email address of your Google Account
    // DEVSTORAGE_READWRITE = 'https://www.googleapis.com/auth/devstorage.read_write';

    /***** Content API for Shopping, v2.1 *****/
    // Manage your product listings and accounts for Google Shopping
    const CONTENT = 'https://www.googleapis.com/auth/content';

    /***** Data Portability API, v1 *****/
    // Move a copy of the Google Alerts subscriptions you created.
    const DATAPORTABILITY_ALERTS_SUBSCRIPTIONS = 'https://www.googleapis.com/auth/dataportability.alerts.subscriptions';
    // Move a copy of messages between you and the businesses you have conversations with across Google services.
    const DATAPORTABILITY_BUSINESSMESSAGING_CONVERSATIONS = 'https://www.googleapis.com/auth/dataportability.businessmessaging.conversations';
    // Move a copy of the information you entered into online forms in Chrome.
    const DATAPORTABILITY_CHROME_AUTOFILL = 'https://www.googleapis.com/auth/dataportability.chrome.autofill';
    // Move a copy of pages you bookmarked in Chrome.
    const DATAPORTABILITY_CHROME_BOOKMARKS = 'https://www.googleapis.com/auth/dataportability.chrome.bookmarks';
    // Move a copy of words you added to Chrome's dictionary.
    const DATAPORTABILITY_CHROME_DICTIONARY = 'https://www.googleapis.com/auth/dataportability.chrome.dictionary';
    // Move a copy of extensions you installed from the Chrome Web Store.
    const DATAPORTABILITY_CHROME_EXTENSIONS = 'https://www.googleapis.com/auth/dataportability.chrome.extensions';
    // Move a copy of sites you visited in Chrome.
    const DATAPORTABILITY_CHROME_HISTORY = 'https://www.googleapis.com/auth/dataportability.chrome.history';
    // Move a copy of pages you added to your reading list in Chrome.
    const DATAPORTABILITY_CHROME_READINGLIST = 'https://www.googleapis.com/auth/dataportability.chrome.reading_list';
    // Move a copy of your settings in Chrome.
    const DATAPORTABILITY_CHROME_SETTINGS = 'https://www.googleapis.com/auth/dataportability.chrome.settings';
    // Move a copy of searches and sites you follow, saved by Discover.
    const DATAPORTABILITY_DISCOVER_FOLLOWS = 'https://www.googleapis.com/auth/dataportability.discover.follows';
    // Move a copy of links to your liked documents, saved by Discover.
    const DATAPORTABILITY_DISCOVER_LIKES = 'https://www.googleapis.com/auth/dataportability.discover.likes';
    // Move a copy of content you marked as not interested, saved by Discover.
    const DATAPORTABILITY_DISCOVER_NOTINTERESTED = 'https://www.googleapis.com/auth/dataportability.discover.not_interested';
    // Move a copy of the places you labeled on Maps.
    const DATAPORTABILITY_MAPS_ALIASEDPLACES = 'https://www.googleapis.com/auth/dataportability.maps.aliased_places';
    // Move a copy of your pinned trips on Maps.
    const DATAPORTABILITY_MAPS_COMMUTE_ROUTES = 'https://www.googleapis.com/auth/dataportability.maps.commute_routes';
    // Move a copy of your commute settings on Maps.
    const DATAPORTABILITY_MAPS_COMMUTESETTINGS = 'https://www.googleapis.com/auth/dataportability.maps.commute_settings';
    // Move a copy of your electric vehicle profile on Maps.
    const DATAPORTABILITY_MAPS_EVPROFILE = 'https://www.googleapis.com/auth/dataportability.maps.ev_profile';
    // Move a copy of the corrections you made to places or map information on Maps.
    const DATAPORTABILITY_MAPS_FACTUALCONTRIBUTIONS = 'https://www.googleapis.com/auth/dataportability.maps.factual_contributions';
    // Move a copy of your updates to places on Maps.
    const DATAPORTABILITY_MAPS_OFFERINGCONTRIBUTIONS = 'https://www.googleapis.com/auth/dataportability.maps.offering_contributions';
    // Move a copy of the photos and videos you posted on Maps.
    const DATAPORTABILITY_MAPS_PHOTOSVIDEOS = 'https://www.googleapis.com/auth/dataportability.maps.photos_videos';
    // Move a copy of the questions and answers you posted on Maps.
    const DATAPORTABILITY_MAPS_QUESTIONSANSWERS = 'https://www.googleapis.com/auth/dataportability.maps.questions_answers';
    // Move a copy of your reviews and posts on Maps.
    const DATAPORTABILITY_MAPS_REVIEWS = 'https://www.googleapis.com/auth/dataportability.maps.reviews';
    // Move a copy of your Starred places list on Maps.
    const DATAPORTABILITY_MAPS_STARREDPLAES = 'https://www.googleapis.com/auth/dataportability.maps.starred_places';
    // Move a copy of your Maps activity.
    const DATAPORTABILITY_MYACTIVITY_MAPS = 'https://www.googleapis.com/auth/dataportability.myactivity.maps';
    // Move a copy of your My Ad Center activity.
    const DATAPORTABILITY_MYACTIVITY_MYADCENTER = 'https://www.googleapis.com/auth/dataportability.myactivity.myadcenter';
    // Move a copy of your Google Play activity.
    const DATAPORTABILITY_MYACTIVITY_PLAY = 'https://www.googleapis.com/auth/dataportability.myactivity.play';
    // Move a copy of your Google Search activity.
    const DATAPORTABILITY_MYACTIVITY_SEARCH = 'https://www.googleapis.com/auth/dataportability.myactivity.search';
    // Move a copy of your Shopping activity.
    const DATAPORTABILITY_MYACTIVITY_SHOPPING = 'https://www.googleapis.com/auth/dataportability.myactivity.shopping';
    // Move a copy of your YouTube activity.
    const DATAPORTABILITY_MYACTIVITY_YOUTUBE = 'https://www.googleapis.com/auth/dataportability.myactivity.youtube';
    // Move a copy of the maps you created in My Maps.
    const DATAPORTABILITY_MYMAPS_MAPS = 'https://www.googleapis.com/auth/dataportability.mymaps.maps';
    // Move a copy of your food purchase and reservation activity.
    const DATAPORTABILITY_ORDERRESEARVE_PURCHASES_RESERVATIONS = 'https://www.googleapis.com/auth/dataportability.order_reserve.purchases_reservations';
    // Move a copy of information about your devices with Google Play Store installed.
    const DATAPORTABILITY_PLAY_DEVICES = 'https://www.googleapis.com/auth/dataportability.play.devices';
    // Move a copy of your Google Play Store Grouping tags created by app developers.
    const DATAPORTABILITY_PLAY_GROUPING = 'https://www.googleapis.com/auth/dataportability.play.grouping';
    // Move a copy of your Google Play Store app installations.
    const DATAPORTABILITY_PLAY_INSTALLS = 'https://www.googleapis.com/auth/dataportability.play.installs';
    // Move a copy of your Google Play Store downloads, including books, games, and apps.
    const DATAPORTABILITY_PLAY_LIBRARIES = 'https://www.googleapis.com/auth/dataportability.play.library';
    // Move a copy of information about your Google Play Store Points.
    const DATAPORTABILITY_PLAY_PLAYPOINTS = 'https://www.googleapis.com/auth/dataportability.play.playpoints';
    // Move a copy of information about your Google Play Store promotions.
    const DATAPORTABILITY_PLAY_PROMOTIONS = 'https://www.googleapis.com/auth/dataportability.play.promotions';
    // Move a copy of your Google Play Store purchases.
    const DATAPORTABILITY_PLAY_PURCHASES = 'https://www.googleapis.com/auth/dataportability.play.purchases';
    // Move a copy of your Google Play Store redemption activities.
    const DATAPORTABILITY_PLAY_REDEMPTIONS = 'https://www.googleapis.com/auth/dataportability.play.redemptions';
    // Move a copy of your Google Play Store subscriptions.
    const DATAPORTABILITY_PLAY_SUBSCRIPTIONS = 'https://www.googleapis.com/auth/dataportability.play.subscriptions';
    // Move a copy of your Google Play Store user settings and preferences.
    const DATAPORTABILITY_PLAY_USERSETTINGS = 'https://www.googleapis.com/auth/dataportability.play.usersettings';
    // Move a copy of your saved links, images, places, and collections from your use of Google services.
    const DATAPORTABILITY_SAVED_COLLECTIONS = 'https://www.googleapis.com/auth/dataportability.saved.collections';
    // Move a copy of your media reviews on Google Search.
    const DATAPORTABILITY_SEARCHUGC_MEDIA_REVIEWSANDSTARS = 'https://www.googleapis.com/auth/dataportability.search_ugc.media.reviews_and_stars';
    // Move a copy of your self-reported video streaming provider preferences from Google Search and Google TV.
    const DATAPORTABILITY_SEARCHUGC_MEDIA_STRAININGVIDEOPROVIDERS = 'https://www.googleapis.com/auth/dataportability.search_ugc.media.streaming_video_providers';
    // Move a copy of your indicated thumbs up and thumbs down on media in Google Search and Google TV.
    const DATAPORTABILITY_SEARCHUGC_MEDIA_THUMBS = 'https://www.googleapis.com/auth/dataportability.search_ugc.media.thumbs';
    // Move a copy of information about the movies and TV shows you marked as watched on Google Search and Google TV.
    const DATAPORTABILITY_SEARCHUGC_MEDIA_WATCHED = 'https://www.googleapis.com/auth/dataportability.search_ugc.media.watched';
    // Move a copy of your notification settings on the Google Search app.
    const DATAPORTABILITY_SEARCHNOTIFICATIONS_SETTINGS = 'https://www.googleapis.com/auth/dataportability.searchnotifications.settings';
    // Move a copy of your notification subscriptions on Google Search app.
    const DATAPORTABILITY_SEARCHNOTIFICATIONS_SUBSCRIPTIONS = 'https://www.googleapis.com/auth/dataportability.searchnotifications.subscriptions';
    // Move a copy of your shipping information on Shopping.
    const DATAPORTABILITY_SHOPPING_ADDRESSES = 'https://www.googleapis.com/auth/dataportability.shopping.addresses';
    // Move a copy of reviews you wrote about products or online stores on Google Search.
    const DATAPORTABILITY_SHOPPING_REVIEWS = 'https://www.googleapis.com/auth/dataportability.shopping.reviews';
    // Move a copy of the images and videos you uploaded to Street View.
    const DATAPORTABILITY_STREETVIEW_IMAGERY = 'https://www.googleapis.com/auth/dataportability.streetview.imagery';
    // Move a copy of information about your YouTube channel.
    const DATAPORTABILITY_YOUTUBE_CHANNEL = 'https://www.googleapis.com/auth/dataportability.youtube.channel';
    // Move a copy of your YouTube clips metadata.
    const DATAPORTABILITY_YOUTUBE_CLIPS = 'https://www.googleapis.com/auth/dataportability.youtube.clips';
    // Move a copy of your YouTube comments.
    const DATAPORTABILITY_YOUTUBE_COMMENTS = 'https://www.googleapis.com/auth/dataportability.youtube.comments';
    // Move a copy of your YouTube messages in live chat.
    const DATAPORTABILITY_YOUTUME_LIVECHAT = 'https://www.googleapis.com/auth/dataportability.youtube.live_chat';
    // Move a copy of your uploaded YouTube music tracks and your YouTube music library.
    const DATAPORTABILITY_YOUTUBE_MUSIC = 'https://www.googleapis.com/auth/dataportability.youtube.music';
    // Move a copy of your YouTube playables saved game progress files.
    const DATAPORTABILITY_YOUTUBE_PLAYABLE = 'https://www.googleapis.com/auth/dataportability.youtube.playable';
    // Move a copy of your YouTube posts.
    const DATAPORTABILITY_YOUTUBE_POSTS = 'https://www.googleapis.com/auth/dataportability.youtube.posts';
    // Move a copy of your YouTube private playlists.
    const DATAPORTABILITY_YOUTUBE_PRIVATEPLAYLISTS = 'https://www.googleapis.com/auth/dataportability.youtube.private_playlists';
    // Move a copy of your private YouTube videos and information about them.
    const DATAPORTABILITY_YOUTUBE_PRIVATEVIDEOS = 'https://www.googleapis.com/auth/dataportability.youtube.private_videos';
    // Move a copy of your public YouTube playlists.
    const DATAPORTABILITY_YOUTUBE_PUBLICPLAYLISTS = 'https://www.googleapis.com/auth/dataportability.youtube.public_playlists';
    // Move a copy of your public YouTube videos and information about them.
    const DATAPORTABILITY_YOUTUBE_PUBLICVIDEOS = 'https://www.googleapis.com/auth/dataportability.youtube.public_videos';
    // Move a copy of your YouTube shopping wishlists, and wishlist items.
    const DATAPORTABILITY_YOUTUBE_SHOPPING = 'https://www.googleapis.com/auth/dataportability.youtube.shopping';
    // Move a copy of your YouTube channel subscriptions, even if they're private.
    const DATAPORTABILITY_YOUTUBE_SUBSCRIPTIONS = 'https://www.googleapis.com/auth/dataportability.youtube.subscriptions';
    // Move a copy of your unlisted YouTube playlists.
    const DATAPORTABILITY_YOUTUBE_UNLISTEDPLAYLISTS = 'https://www.googleapis.com/auth/dataportability.youtube.unlisted_playlists';
    // Move a copy of your unlisted YouTube videos and information about them.
    const DATAPORTABILITY_YOUTUBE_UNLISTEDVIDEOS = 'https://www.googleapis.com/auth/dataportability.youtube.unlisted_videos';

    /***** Dataflow API, v1b3 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // View and manage your Google Compute Engine resources
    // COMPUTE = 'https://www.googleapis.com/auth/compute';
    // View your Google Compute Engine resources
    // COMPUTE_READONLY = 'https://www.googleapis.com/auth/compute.readonly';
    // See your primary Google Account email address
    // USERINFO_EMAIL = 'https://www.googleapis.com/auth/userinfo.email';

    /***** Drive Activity API, v2 *****/
    // View and add to the activity record of files in your Google Drive
    const DRIVE_ACTIVITY = 'https://www.googleapis.com/auth/drive.activity';
    // View the activity record of files in your Google Drive
    const DRIVE_ACTIVITY_READONLY = 'https://www.googleapis.com/auth/drive.activity.readonly';

    /***** Drive Labels API, v2 *****/
    // See, edit, create, and delete all Google Drive labels in your organization, and see your organization's label-related admin policies
    const DRIVE_ADMIN_LABELS = 'https://www.googleapis.com/auth/drive.admin.labels';
    // See all Google Drive labels and label-related admin policies in your organization
    const DRIVE_ADMIN_LABELS_READONLY = 'https://www.googleapis.com/auth/drive.admin.labels.readonly';
    // See, edit, create, and delete your Google Drive labels
    const DRIVE_LABELS = 'https://www.googleapis.com/auth/drive.labels';
    // See your Google Drive labels
    const DRIVE_LABELS_READONLY = 'https://www.googleapis.com/auth/drive.labels.readonly';

    /***** Enterprise License Manager API, v1 *****/
    // View and manage G Suite licenses for your domain
    const APP_LICENSING = 'https://www.googleapis.com/auth/apps.licensing';

    /***** Error Reporting API, v1beta1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Fact Check Tools API, v1alpha1 *****/
    // Read, create, update, and delete your ClaimReview data.
    const FACTCHECKTOOLS = 'https://www.googleapis.com/auth/factchecktools';

    /***** Firebase Cloud Messaging API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // Send messages and manage messaging subscriptions for your Firebase applications
    const FIREBASE_MESSAGING = 'https://www.googleapis.com/auth/firebase.messaging';

    /***** Firebase Dynamic Links API, v1 *****/
    // View and administer all your Firebase data and settings
    const FIREBASE = 'https://www.googleapis.com/auth/firebase';

    /***** Firebase Management API, v1beta1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // View your data across Google Cloud services and see the email address of your Google Account
    // CLOUDPLATFORM_READONLY = 'https://www.googleapis.com/auth/cloud-platform.read-only';
    // View and administer all your Firebase data and settings
    // FIREBASE = 'https://www.googleapis.com/auth/firebase'
    // View all your Firebase data and settings
    const FIREBASE_READONLY = 'https://www.googleapis.com/auth/firebase.readonly';

    /***** Firebase Rules API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // View and administer all your Firebase data and settings
    // FIREBASE = 'https://www.googleapis.com/auth/firebase'
    // View all your Firebase data and settings
    // FIREBASE_READONLY = 'https://www.googleapis.com/auth/firebase.readonly';

    /***** Fitness API, v1 *****/
    // Use Google Fit to see and store your physical activity data
    const FITNESS_ACTIVITY_READ = 'https://www.googleapis.com/auth/fitness.activity.read';
    // Add to your Google Fit physical activity data
    const FITNESS_ACTIVITY_WRITE = 'https://www.googleapis.com/auth/fitness.activity.write';
    // See info about your blood glucose in Google Fit. I consent to Google sharing my blood glucose information with this app.
    const FITNESS_BLOODGLUCOSE_READ = 'https://www.googleapis.com/auth/fitness.blood_glucose.read';
    // Add info about your blood glucose to Google Fit. I consent to Google using my blood glucose information with this app.
    const FITNESS_BLOODGLUCOSE_WRITE = 'https://www.googleapis.com/auth/fitness.blood_glucose.write';
    // See info about your blood pressure in Google Fit. I consent to Google sharing my blood pressure information with this app.
    const FITNESS_BLOODPRESSURE_READ = 'https://www.googleapis.com/auth/fitness.blood_pressure.read';
    // Add info about your blood pressure in Google Fit. I consent to Google using my blood pressure information with this app.
    const FITNESS_BLOODPRESSURE_WRITE = 'https://www.googleapis.com/auth/fitness.blood_pressure.write';
    // See info about your body measurements in Google Fit
    const FITNESS_BODY_READ = 'https://www.googleapis.com/auth/fitness.body.read';
    // Add info about your body measurements to Google Fit
    const FITNESS_BODY_WRITE = 'https://www.googleapis.com/auth/fitness.body.write';
    // See info about your body temperature in Google Fit. I consent to Google sharing my body temperature information with this app.
    const FITNESS_BODYTEMPERATURE_READ = 'https://www.googleapis.com/auth/fitness.body_temperature.read';
    // Add to info about your body temperature in Google Fit. I consent to Google using my body temperature information with this app.
    const FITNESS_BODYTEMPERATURE_WRITE = 'https://www.googleapis.com/auth/fitness.body_temperature.write';
    // See your heart rate data in Google Fit. I consent to Google sharing my heart rate information with this app.
    const FITNESS_HEARTRATE_READ = 'https://www.googleapis.com/auth/fitness.heart_rate.read';
    // Add to your heart rate data in Google Fit. I consent to Google using my heart rate information with this app.
    const FITNESS_HEARTRATE_WRITE = 'https://www.googleapis.com/auth/fitness.heart_rate.write';
    // See your Google Fit speed and distance data
    const FITNESS_LOCATION_READ = 'https://www.googleapis.com/auth/fitness.location.read';
    // Add to your Google Fit location data
    const FITNESS_LOCATION_WRITE = 'https://www.googleapis.com/auth/fitness.location.write';
    // See info about your nutrition in Google Fit
    const FITNESS_NUTRITION_READ = 'https://www.googleapis.com/auth/fitness.nutrition.read';
    // Add to info about your nutrition in Google Fit
    const FITNESS_NUTRITION_WRITE = 'https://www.googleapis.com/auth/fitness.nutrition.write';
    // See info about your oxygen saturation in Google Fit. I consent to Google sharing my oxygen saturation information with this app.
    const FITNESS_OXYGEN_SATURATION_READ = 'https://www.googleapis.com/auth/fitness.oxygen_saturation.read';
    // Add info about your oxygen saturation in Google Fit. I consent to Google using my oxygen saturation information with this app.
    const FITNESS_OXYGEN_SATURATION_WRITE = 'https://www.googleapis.com/auth/fitness.oxygen_saturation.write';
    // See info about your reproductive health in Google Fit. I consent to Google sharing my reproductive health information with this app.
    const FITNESS_REPRODUCTIVEHEATH_READ = 'https://www.googleapis.com/auth/fitness.reproductive_health.read';
    // Add info about your reproductive health in Google Fit. I consent to Google using my reproductive health information with this app.
    const FITNESS_REPRODUCTIVEHEATH_WRITE = 'https://www.googleapis.com/auth/fitness.reproductive_health.write';
    // See your sleep data in Google Fit. I consent to Google sharing my sleep information with this app.
    const FITNESS_SLEEP_READ = 'https://www.googleapis.com/auth/fitness.sleep.read';
    // Add to your sleep data in Google Fit. I consent to Google using my sleep information with this app.
    const FITNESS_SLEEP_WRITE = 'https://www.googleapis.com/auth/fitness.sleep.write';

    /***** Genomics API, v2alpha1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // View and manage Genomics data
    const GENOMICS = 'https://www.googleapis.com/auth/genomics';

    /***** Gmail API, v1 *****/
    // Read, compose, send, and permanently delete all your email from Gmail
    // MAIL = 'https://mail.google.com/';
    // Manage drafts and send emails when you interact with the add-on
    const GMAIL_ADDONS_CURRENT_ACTION_COMPOSE = 'https://www.googleapis.com/auth/gmail.addons.current.action.compose';
    // View your email messages when you interact with the add-on
    const GMAIL_ADDONS_CURRENT_MESSAGING_ACTION = 'https://www.googleapis.com/auth/gmail.addons.current.message.action';
    // View your email message metadata when the add-on is running
    const GMAIL_ADDONS_CURRENT_MESSAGING_METADATA = 'https://www.googleapis.com/auth/gmail.addons.current.message.metadata';
    // View your email messages when the add-on is running
    const GMAIL_ADDONS_CURRENT_MESSAGING_READONLY = 'https://www.googleapis.com/auth/gmail.addons.current.message.readonly';
    // Manage drafts and send emails
    const GMAIL_COMPOSE = 'https://www.googleapis.com/auth/gmail.compose';
    // Add emails into your Gmail mailbox
    const GMAIL_INSERT = 'https://www.googleapis.com/auth/gmail.insert';
    // See and edit your email labels
    const GMAIL_LABELS = 'https://www.googleapis.com/auth/gmail.labels';
    // View your email message metadata such as labels and headers, but not the email body
    const GMAIL_METADATA = 'https://www.googleapis.com/auth/gmail.metadata';
    // Read, compose, and send emails from your Gmail account
    const GMAIL_MODIFY = 'https://www.googleapis.com/auth/gmail.modify';
    // View your email messages and settings
    const GMAIL_READONLY = 'https://www.googleapis.com/auth/gmail.readonly';
    // Send email on your behalf
    const GMAIL_SEND = 'https://www.googleapis.com/auth/gmail.send';
    // See, edit, create, or change your email settings and filters in Gmail
    const GMAIL_SETTINGS_BASIC = 'https://www.googleapis.com/auth/gmail.settings.basic';
    // Manage your sensitive mail settings, including who can manage your mail
    const GMAIL_SETTINGS_SHARING = 'https://www.googleapis.com/auth/gmail.settings.sharing';

    /***** Gmail Postmaster Tools API, v1 *****/
    // See email traffic metrics for the domains you have registered in Gmail Postmaster Tools
    const POSTMASTER_READONLY = 'https://www.googleapis.com/auth/postmaster.readonly';

    /***** Google Analytics API, v3 *****/
    // View and manage your Google Analytics data
    // ANALYTICS = 'https://www.googleapis.com/auth/analytics';
    // Edit Google Analytics management entities
    const ANALYTICS_EDIT = 'https://www.googleapis.com/auth/analytics.edit';
    // Manage Google Analytics Account users by email address
    const ANALYTICS_MANAGE_USERS = 'https://www.googleapis.com/auth/analytics.manage.users';
    // View Google Analytics user permissions
    const ANALYTICS_MANAGE_USERS_READONLY = 'https://www.googleapis.com/auth/analytics.manage.users.readonly';
    // Create a new Google Analytics account along with its default property and view
    const ANALYTICS_PROVISION = 'https://www.googleapis.com/auth/analytics.provision';
    // View your Google Analytics data
    // ANALYTICS_READONLY = 'https://www.googleapis.com/auth/analytics.readonly';
    // Manage Google Analytics user deletion requests
    const ANALYTICS_USER_DELETION = 'https://www.googleapis.com/auth/analytics.user.deletion';

    /***** Google Chat API, v1 *****/
    // Delete conversations and spaces owned by your organization and remove access to associated files in Google Chat
    const CHAT_ADMIN_DELETE = 'https://www.googleapis.com/auth/chat.admin.delete';
    // View, add, update and remove members and managers in conversations owned by your organization
    const CHAT_ADMIN_MEMBERSHIPS = 'https://www.googleapis.com/auth/chat.admin.memberships';
    // View members and managers in conversations owned by your organization
    const CHAT_ADMIN_MEMBERSHIPS_READONLY = 'https://www.googleapis.com/auth/chat.admin.memberships.readonly';
    // View or edit display name, description, and other metadata for all Google Chat conversations owned by your organization
    const CHAT_ADMIN_SPACES = 'https://www.googleapis.com/auth/chat.admin.spaces';
    // View display name, description, and other metadata for all Google Chat conversations owned by your organization
    const CHAT_ADMIN_SPACES_READONLY = 'https://www.googleapis.com/auth/chat.admin.spaces.readonly';
    // Delete conversations and spaces and remove access to associated files in Google Chat
    const CHAT_DELETE = 'https://www.googleapis.com/auth/chat.delete';
    // Import spaces, messages, and memberships into Google Chat.
    const CHAT_IMPORT = 'https://www.googleapis.com/auth/chat.import';
    // See, add, update, and remove members from conversations and spaces in Google Chat
    const CHAT_MEMBERSHIPS = 'https://www.googleapis.com/auth/chat.memberships';
    // Add and remove itself from conversations and spaces in Google Chat
    const CHAT_MEMBERSHIPS_APP = 'https://www.googleapis.com/auth/chat.memberships.app';
    // View members in Google Chat conversations.
    const CHAT_MEMBERSHIPS_READONLY = 'https://www.googleapis.com/auth/chat.memberships.readonly';
    // See, compose, send, update, and delete messages and their associated attachments, and add, see, and delete reactions to messages.
    const CHAT_MESSAGES = 'https://www.googleapis.com/auth/chat.messages';
    // Compose and send messages in Google Chat
    const CHAT_MESSAGES_CREATE = 'https://www.googleapis.com/auth/chat.messages.create';
    // See, add, and delete reactions to messages in Google Chat
    const CHAT_MESSAGES_REACTIONS = 'https://www.googleapis.com/auth/chat.messages.reactions';
    // Add reactions to messages in Google Chat
    const CHAT_MESSAGES_REACTIONS_CREATE = 'https://www.googleapis.com/auth/chat.messages.reactions.create';
    // View reactions to messages in Google Chat
    const CHAT_MESSAGES_REACTIONS_READONLY = 'https://www.googleapis.com/auth/chat.messages.reactions.readonly';
    // See messages and their associated reactions and attachments in Google Chat
    const CHAT_MESSAGES_READONLY = 'https://www.googleapis.com/auth/chat.messages.readonly';
    // Create conversations and spaces and see or update metadata (including history settings and access settings) in Google Chat
    const CHAT_SPACES = 'https://www.googleapis.com/auth/chat.spaces';
    // Create new conversations and spaces in Google Chat
    const CHAT_SPACES_CREATE = 'https://www.googleapis.com/auth/chat.spaces.create';
    // View chat and spaces in Google Chat
    const CHAT_SPACES_READONLY = 'https://www.googleapis.com/auth/chat.spaces.readonly';
    // View and modify last read time for Google Chat conversations
    const CHAT_USERS_READSTATE = 'https://www.googleapis.com/auth/chat.users.readstate';
    // View last read time for Google Chat conversations
    const CHAT_USERS_READSTATE_READONLY = 'https://www.googleapis.com/auth/chat.users.readstate.readonly';

    /***** Google Classroom API, v1 *****/
    // View and manage announcements in Google Classroom
    const CLASSROOM_ANNOUNCEMENTS = 'https://www.googleapis.com/auth/classroom.announcements';
    // View announcements in Google Classroom
    const CLASSROOM_ANNOUNCEMENTS_READONLY = 'https://www.googleapis.com/auth/classroom.announcements.readonly';
    // See, edit, create, and permanently delete your Google Classroom classes
    const CLASSROOM_COURSES = 'https://www.googleapis.com/auth/classroom.courses';
    // View your Google Classroom classes
    const CLASSROOM_COURSES_READONLY = 'https://www.googleapis.com/auth/classroom.courses.readonly';
    // See, create and edit coursework items including assignments, questions, and grades
    const CLASSROOM_COURSEWORK_ME = 'https://www.googleapis.com/auth/classroom.coursework.me';
    // View your course work and grades in Google Classroom
    const CLASSROOM_COURSEWORK_ME_READONLY = 'https://www.googleapis.com/auth/classroom.coursework.me.readonly';
    // Manage course work and grades for students in the Google Classroom classes you teach and view the course work and grades for classes you administer
    const CLASSROOM_COURSEWORK_STUDENTS = 'https://www.googleapis.com/auth/classroom.coursework.students';
    // View course work and grades for students in the Google Classroom classes you teach or administer
    const CLASSROOM_COURSEWORK_STUDENTS_READONLY = 'https://www.googleapis.com/auth/classroom.coursework.students.readonly';
    // See, edit, and create classwork materials in Google Classroom
    const CLASSROOM_COURSEWORKMATERIALS = 'https://www.googleapis.com/auth/classroom.courseworkmaterials';
    // See all classwork materials for your Google Classroom classes
    const CLASSROOM_COURSEWORKMATERIALS_READONLY = 'https://www.googleapis.com/auth/classroom.courseworkmaterials.readonly';
    // View your Google Classroom guardians
    const CLASSROOM_GUARDIANLINKS_ME_READONLY = 'https://www.googleapis.com/auth/classroom.guardianlinks.me.readonly';
    // View and manage guardians for students in your Google Classroom classes
    const CLASSROOM_GUARDIANLINKS_STUDENTS = 'https://www.googleapis.com/auth/classroom.guardianlinks.students';
    // View guardians for students in your Google Classroom classes
    const CLASSROOM_GUARDIANLINKS_STUDENTS_READONLY = 'https://www.googleapis.com/auth/classroom.guardianlinks.students.readonly';
    // View the email addresses of people in your classes
    const CLASSROOM_PROFILE_EMAILS = 'https://www.googleapis.com/auth/classroom.profile.emails';
    // View the profile photos of people in your classes
    const CLASSROOM_PROFILE_PHOTOS = 'https://www.googleapis.com/auth/classroom.profile.photos';
    // Receive notifications about your Google Classroom data
    const CLASSROOM_PUSHNOTIFICATIONS = 'https://www.googleapis.com/auth/classroom.push-notifications';
    // Manage your Google Classroom class rosters
    const CLASSROOM_ROSTERS = 'https://www.googleapis.com/auth/classroom.rosters';
    // View your Google Classroom class rosters
    const CLASSROOM_ROSTERS_READONLY = 'https://www.googleapis.com/auth/classroom.rosters.readonly';
    // View your course work and grades in Google Classroom
    const CLASSROOM_STUDENTSUBMISSIONS_ME_READONLY = 'https://www.googleapis.com/auth/classroom.student-submissions.me.readonly';
    // View course work and grades for students in the Google Classroom classes you teach or administer
    const CLASSROOM_STUDENTSUBMISSIONS_STUDENTS_READONLY = 'https://www.googleapis.com/auth/classroom.student-submissions.students.readonly';
    // See, create, and edit topics in Google Classroom
    const CLASSROOM_TOPICS = 'https://www.googleapis.com/auth/classroom.topics';
    // View topics in Google Classroom
    const CLASSROOM_TOPICS_READONLY = 'https://www.googleapis.com/auth/classroom.topics.readonly';

    /***** Google Cloud Data Catalog API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Google Cloud Memorystore for Redis API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Google Docs API, v1 *****/
    // See, edit, create, and delete all your Google Docs documents
    // DOCUMENTS = 'https://www.googleapis.com/auth/documents';
    // See all your Google Docs documents
    const DOCUMENT_READONLY = 'https://www.googleapis.com/auth/documents.readonly';
    // See, edit, create, and delete all of your Google Drive files
    // DRIVE = 'https://www.googleapis.com/auth/drive';
    // See, edit, create, and delete only the specific Google Drive files you use with this app
    const DRIVE_FILE = 'https://www.googleapis.com/auth/drive.file';
    // See and download all your Google Drive files
    const DRIVE_READONLY = 'https://www.googleapis.com/auth/drive.readonly';

    /***** Google Drive API, v3 *****/
    // See, edit, create, and delete all of your Google Drive files
    // DRIVE = 'https://www.googleapis.com/auth/drive';
    // See, create, and delete its own configuration data in your Google Drive
    const DRIVE_APPDATA = 'https://www.googleapis.com/auth/drive.appdata';
    // View your Google Drive apps
    const DRIVE_APPS_READONLY = 'https://www.googleapis.com/auth/drive.apps.readonly';
    // See, edit, create, and delete only the specific Google Drive files you use with this app
    // DRIVE_FILE = 'https://www.googleapis.com/auth/drive.file';
    // See and download your Google Drive files that were created or edited by Google Meet.
    const DRIVE_MEET_READONLY = 'https://www.googleapis.com/auth/drive.meet.readonly';
    // View and manage metadata of files in your Google Drive
    const DRIVE_METADATA = 'https://www.googleapis.com/auth/drive.metadata';
    // See information about your Google Drive files
    const DRIVE_METADATA_READONLY = 'https://www.googleapis.com/auth/drive.metadata.readonly';
    // View the photos, videos and albums in your Google Photos
    const DRIVE_PHOTOS_READONLY = 'https://www.googleapis.com/auth/drive.photos.readonly';
    // See and download all your Google Drive files
    // DRIVE_READONLY = 'https://www.googleapis.com/auth/drive.readonly';
    // Modify your Google Apps Script scripts' behavior
    const DRIVE_SCRIPTS = 'https://www.googleapis.com/auth/drive.scripts';

    /***** Google Forms API, v1 *****/
    // See, edit, create, and delete all of your Google Drive files
    // DRIVE = 'https://www.googleapis.com/auth/drive';
    // See, edit, create, and delete only the specific Google Drive files you use with this app
    // DRIVE_FILE = 'https://www.googleapis.com/auth/drive.file';
    // See and download all your Google Drive files
    // DRIVE_READONLY = 'https://www.googleapis.com/auth/drive.readonly';
    // See, edit, create, and delete all your Google Forms forms
    const FORMS_BODY = 'https://www.googleapis.com/auth/forms.body';
    // See all your Google Forms forms
    const FORMS_BODY_READONLY = 'https://www.googleapis.com/auth/forms.body.readonly';
    // See all responses to your Google Forms forms
    const FORMS_RESPONSES_READONLY = 'https://www.googleapis.com/auth/forms.responses.readonly';

    /***** Google Identity Toolkit API, v3 *****/
    // View and manage your data across Google Cloud Platform services
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // View and administer all your Firebase data and settings
    // FIREBASE = 'https://www.googleapis.com/auth/firebase'

    /***** Google Keep API, v1 *****/
    // See, edit, create and permanently delete all your Google Keep data
    const KEEP = 'https://www.googleapis.com/auth/keep';
    // View all your Google Keep data
    const KEEP_READONLY = 'https://www.googleapis.com/auth/keep.readonly';

    /***** Google Meet API, v2 *****/
    // Create, edit, and see information about your Google Meet conferences created by the app.
    const MEETINGS_SPACE_CREATED = 'https://www.googleapis.com/auth/meetings.space.created';
    // Read information about any of your Google Meet conferences
    const MEETINGS_SPACE_READONLY = 'https://www.googleapis.com/auth/meetings.space.readonly';

    /***** Google OAuth2 API, v2 *****/
    // See your primary Google Account email address
    // USERINFO_EMAIL = 'https://www.googleapis.com/auth/userinfo.email';
    // See your personal info, including any personal info you've made publicly available
    const USERINFO_PROFILE = 'https://www.googleapis.com/auth/userinfo.profile';

    /***** Google Play Android Developer API, v3 *****/
    // View and manage your Google Play Developer account
    const ANDROIDPUBLISHER = 'https://www.googleapis.com/auth/androidpublisher';

    /***** Google Play Custom App Publishing API, v1 *****/
    // View and manage your Google Play Developer account
    // ANDROIDPUBLISHER = 'https://www.googleapis.com/auth/androidpublisher';

    /***** Google Play EMM API, v1 *****/
    // Manage corporate Android devices
    const ANDROIDENTERPRISE = 'https://www.googleapis.com/auth/androidenterprise';

    /***** Google Play Game Management, v1management *****/
    // Create, edit, and delete your Google Play Games activity
    const GAMES = 'https://www.googleapis.com/auth/games';

    /***** Google Play Game Services, v1 *****/
    // See, create, and delete its own configuration data in your Google Drive
    // DRIVE_APPDATA = 'https://www.googleapis.com/auth/drive.appdata';
    // Create, edit, and delete your Google Play Games activity
    // GAMES = 'https://www.googleapis.com/auth/games';

    /***** Google Play Game Services Publishing API, v1configuration *****/
    // View and manage your Google Play Developer account
    // ANDROIDPUBLISHER = 'https://www.googleapis.com/auth/androidpublisher';

    /***** Google Search Console API, v1 *****/
    // View and manage Search Console data for your verified sites
    const WEBMASTERS = 'https://www.googleapis.com/auth/webmasters';
    // View Search Console data for your verified sites
    const WEBMASTERS_READONLY = 'https://www.googleapis.com/auth/webmasters.readonly';

    /***** Google Sheets API, v4 *****/
    // See, edit, create, and delete all of your Google Drive files
    // DRIVE = 'https://www.googleapis.com/auth/drive';
    // See, edit, create, and delete only the specific Google Drive files you use with this app
    // DRIVE_FILE = 'https://www.googleapis.com/auth/drive.file';S
    // See and download all your Google Drive files
    // DRIVE_READONLY = 'https://www.googleapis.com/auth/drive.readonly'
    // See, edit, create, and delete all your Google Sheets spreadsheets
    // SPREADSHEETS = 'https://www.googleapis.com/auth/spreadsheets';
    // See all your Google Sheets spreadsheets
    const SPREADSHEETS_READONLY = 'https://www.googleapis.com/auth/spreadsheets.readonly';

    /***** Google Site Verification API, v1 *****/
    // Manage the list of sites and domains you control
    const SITEVERIFICATION = 'https://www.googleapis.com/auth/siteverification';
    // Manage your new site verifications with Google
    const SITEVERIFICATION_VERIFYONLY = 'https://www.googleapis.com/auth/siteverification.verify_only';

    /***** Google Slides API, v1 *****/
    // See, edit, create, and delete all of your Google Drive files
    // DRIVE = 'https://www.googleapis.com/auth/drive';
    // See, edit, create, and delete only the specific Google Drive files you use with this app
    // DRIVE_FILE = 'https://www.googleapis.com/auth/drive.file';
    // See and download all your Google Drive files
    // DRIVE_READONLY = 'https://www.googleapis.com/auth/drive.readonly'
    // See, edit, create, and delete all your Google Slides presentations
    const PRESENTATIONS = 'https://www.googleapis.com/auth/presentations';
    // See all your Google Slides presentations
    const PRESENTATIONS_READONLY = 'https://www.googleapis.com/auth/presentations.readonly';
    // See, edit, create, and delete all your Google Sheets spreadsheets
    // SPREADSHEETS = 'https://www.googleapis.com/auth/spreadsheets';
    // See all your Google Sheets spreadsheets
    // SPREADSHEETS_READONLY = 'https://www.googleapis.com/auth/spreadsheets.readonly';

    /***** Google Tasks API, v1 *****/
    // Create, edit, organize, and delete all your tasks
    const TASKS = 'https://www.googleapis.com/auth/tasks';
    // View your tasks
    const TASKS_READONLY = 'https://www.googleapis.com/auth/tasks.readonly';

    /***** Google Vault API, v1 *****/
    // Manage your eDiscovery data
    const EDISCOVERY = 'https://www.googleapis.com/auth/ediscovery';
    // View your eDiscovery data
    const EDISCOVERY_READONLY = 'https://www.googleapis.com/auth/ediscovery.readonly';

    /***** Google Workspace Alert Center API, v1beta1 *****/
    // See and delete your domain's G Suite alerts, and send alert feedback
    const APP_ALERTS = 'https://www.googleapis.com/auth/apps.alerts';

    /***** Google Workspace Events API, v1 *****/
    // See, add, update, and remove members from conversations and spaces in Google Chat
    // CHAT_MEMBERSHIPS = 'https://www.googleapis.com/auth/chat.memberships';
    // View members in Google Chat conversations.
    // CHAT_MEMBERSHIPS_READONLY = 'https://www.googleapis.com/auth/chat.memberships.readonly';
    // See, compose, send, update, and delete messages and their associated attachments, and add, see, and delete reactions to messages.
    // CHAT_MESSAGES = 'https://www.googleapis.com/auth/chat.messages';
    // See, add, and delete reactions to messages in Google Chat
    // CHAT_MESSAGES_REACTIONS = 'https://www.googleapis.com/auth/chat.messages.reactions';
    // View reactions to messages in Google Chat
    // CHAT_MESSAGES_REACTIONS_READONLY = 'https://www.googleapis.com/auth/chat.messages.reactions.readonly';
    // See messages and their associated reactions and attachments in Google Chat
    // CHAT_MESSAGES_READONLY = 'https://www.googleapis.com/auth/chat.messages.readonly';
    // Create conversations and spaces and see or update metadata (including history settings and access settings) in Google Chat
    // CHAT_SPACES = 'https://www.googleapis.com/auth/chat.spaces';
    // View chat and spaces in Google Chat
    // CHAT_SPACES_READONLY = 'https://www.googleapis.com/auth/chat.spaces.readonly';
    // Create, edit, and see information about your Google Meet conferences created by the app.
    // MEETINGS_SPACE_CREATED = 'https://www.googleapis.com/auth/meetings.space.created';
    // Read information about any of your Google Meet conferences
    // MEETINGS_SPACE_READONLY = 'https://www.googleapis.com/auth/meetings.space.readonly';

    /***** Google Workspace Reseller API, v1 *****/
    // Manage users on your domain
    const APPS_ORDER = 'https://www.googleapis.com/auth/apps.order';
    // Manage users on your domain
    const APPS_ORDER_READONLY = 'https://www.googleapis.com/auth/apps.order.readonly';

    /***** Groups Migration API, v1 *****/
    // Upload messages to any Google group in your domain
    const APPS_GROUPS_MIGRATION = 'https://www.googleapis.com/auth/apps.groups.migration';

    /***** Groups Settings API, v1 *****/
    // View and manage the settings of a G Suite group
    const APP_GROUPS_SETTINGS = 'https://www.googleapis.com/auth/apps.groups.settings';

    /***** IAM Service Account Credentials API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Indexing API, v3 *****/
    // Submit data to Google for indexing
    const INDEXING = 'https://www.googleapis.com/auth/indexing';

    /***** Kubernetes Engine API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Library Agent API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Managed Service for Microsoft Active Directory API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Manufacturer Center API, v1 *****/
    // Manage your product listings for Google Manufacturer Center
    const MANUFACTURERCENTER = 'https://www.googleapis.com/auth/manufacturercenter';

    /***** Network Management API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** OS Config API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** People API, v1 *****/
    // See, edit, download, and permanently delete your contacts
    const CONTACTS = 'https://www.googleapis.com/auth/contacts';
    // See and download contact info automatically saved in your "Other contacts"
    const CONTACTS_OTHER_READONLY = 'https://www.googleapis.com/auth/contacts.other.readonly';
    // See and download your contacts
    const CONTACTS_READONLY = 'https://www.googleapis.com/auth/contacts.readonly';
    // See and download your organization's GSuite directory
    const DIRECTORY_READONLY = 'https://www.googleapis.com/auth/directory.readonly';
    // View your street addresses
    const USER_ADDRESSES_READONLY = 'https://www.googleapis.com/auth/user.addresses.read';
    // See and download your exact date of birth
    const USER_BIRTHDAY_READ = 'https://www.googleapis.com/auth/user.birthday.read';
    // See and download all of your Google Account email addresses
    const USER_EMAILS_READ = 'https://www.googleapis.com/auth/user.emails.read';
    // See your gender
    const USER_GENDER_READ = 'https://www.googleapis.com/auth/user.gender.read';
    // See your education, work history and org info
    const USER_ORGANIZATION_READ = 'https://www.googleapis.com/auth/user.organization.read';
    // See and download your personal phone numbers
    const USER_PHONENUMBERS_READ = 'https://www.googleapis.com/auth/user.phonenumbers.read';
    // See your primary Google Account email address
    // USERINFO_EMAIL = 'https://www.googleapis.com/auth/userinfo.email';
    // See your personal info, including any personal info you've made publicly available
    // USERINFO_PROFILE = 'https://www.googleapis.com/auth/userinfo.profile';

    /***** Photos Library API, v1 *****/
    // See, upload, and organize items in your Google Photos library
    const PHOTOSLIBRARY = 'https://www.googleapis.com/auth/photoslibrary';
    // Add to your Google Photos library
    const PHOTOSLIBRARY_APPENDONLY = 'https://www.googleapis.com/auth/photoslibrary.appendonly';
    // Edit the info in your photos, videos, and albums created within this app, including titles, descriptions, and covers
    const PHOTOSLIBRARY_EDIT_APPCREATEDDATA = 'https://www.googleapis.com/auth/photoslibrary.edit.appcreateddata';
    // View your Google Photos library
    const PHOTOSLIBRARY_READONLY = 'https://www.googleapis.com/auth/photoslibrary.readonly';
    // Manage photos added by this app
    const PHOTOSLIBRARY_READONLY_APPCREATEDDATA = 'https://www.googleapis.com/auth/photoslibrary.readonly.appcreateddata';
    // Manage and add to shared albums on your behalf
    const PHOTOSLIBRARY_SHARING = 'https://www.googleapis.com/auth/photoslibrary.sharing';

    /***** Policy Troubleshooter API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Recommender API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** SAS Portal API, v1alpha1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // Read, create, update, and delete your SAS Portal data.
    const SASPORTAL = 'https://www.googleapis.com/auth/sasportal';

    /***** SAS Portal API (Testing), v1alpha1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // Read, create, update, and delete your SAS Portal data.
    // SASPORTAL

    /***** Search Ads 360 API, v2 *****/
    // View and manage your advertising data in DoubleClick Search
    const DOUBLECLICKSEARCH = 'https://www.googleapis.com/auth/doubleclicksearch';

    /***** Secret Manager API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Security Command Center API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Serverless VPC Access API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Service Consumer Management API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Service Management API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // View your data across Google Cloud services and see the email address of your Google Account
    // CLOUDPLATFORM_READONLY = 'https://www.googleapis.com/auth/cloud-platform.read-only';
    // Manage your Google API service configuration
    const SERVICE_MANAGEMENT = 'https://www.googleapis.com/auth/service.management';
    // View your Google API service configuration
    const SERVICE_MANAGEMENT_READONLY = 'https://www.googleapis.com/auth/service.management.readonly';

    /***** Service Networking API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // Manage your Google API service configuration
    // SERVICE_MANAGEMENT = 'https://www.googleapis.com/auth/service.management';

    /***** Service Usage API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';
    // View your data across Google Cloud services and see the email address of your Google Account
    // CLOUDPLATFORM_READONLY = 'https://www.googleapis.com/auth/cloud-platform.read-only';
    // Manage your Google API service configuration
    // SERVICE_MANAGEMENT = 'https://www.googleapis.com/auth/service.management';

    /***** Storage Transfer API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** Street View Publish API, v1 *****/
    // Publish and manage your 360 photos on Google Street View
    const STREETVIEWPUBLISH = 'https://www.googleapis.com/auth/streetviewpublish';

    /***** Tag Manager API, v2 *****/
    // Delete your Google Tag Manager containers
    const TAGMANAGER_DELETE_CONTAINER = 'https://www.googleapis.com/auth/tagmanager.delete.containers';
    // Manage your Google Tag Manager container and its subcomponents, excluding versioning and publishing
    const TAGMANAGER_EDIT_CONTAINER = 'https://www.googleapis.com/auth/tagmanager.edit.containers';
    // Manage your Google Tag Manager container versions
    const TAGMANAGER_EDIT_CONTAINERVERSIONS = 'https://www.googleapis.com/auth/tagmanager.edit.containerversions';
    // View and manage your Google Tag Manager accounts
    const TAGMANAGER_MANAGE_ACCOUNTS = 'https://www.googleapis.com/auth/tagmanager.manage.accounts';
    // Manage user permissions of your Google Tag Manager account and container
    const TAGMANAGER_MANAGE_USERS = 'https://www.googleapis.com/auth/tagmanager.manage.users';
    // Publish your Google Tag Manager container versions
    const TAGMANAGER_PUBLISH = 'https://www.googleapis.com/auth/tagmanager.publish';
    // View your Google Tag Manager container and its subcomponents
    const TAGMANAGER_READONLY = 'https://www.googleapis.com/auth/tagmanager.readonly';

    /***** Web Security Scanner API, v1 *****/
    // See, edit, configure, and delete your Google Cloud data and see the email address for your Google Account.
    // CLOUDPLATFORM = 'https://www.googleapis.com/auth/cloud-platform';

    /***** YouTube Analytics API, v2 *****/
    // Manage your YouTube account
    const YOUTUBE = 'https://www.googleapis.com/auth/youtube';
    // View your YouTube account
    const YOUTUBE_READONLY = 'https://www.googleapis.com/auth/youtube.readonly';
    // View and manage your assets and associated content on YouTube
    const YOUTUBEPARTNER = 'https://www.googleapis.com/auth/youtubepartner';
    // View monetary and non-monetary YouTube Analytics reports for your YouTube content
    const YTANALYTICS_MONETARY_READONLY = 'https://www.googleapis.com/auth/yt-analytics-monetary.readonly';
    // View YouTube Analytics reports for your YouTube content
    const YTANALYTICS_READONLY = 'https://www.googleapis.com/auth/yt-analytics.readonly';

    /***** YouTube Data API v3, v3 *****/
    // Manage your YouTube account
    // YOUTUBE = 'https://www.googleapis.com/auth/youtube';
    // See a list of your current active channel members, their current level, and when they became a member
    const YOUTUBE_CHANNELMEMBERSHIPS_CREATOR = 'https://www.googleapis.com/auth/youtube.channel-memberships.creator';
    // See, edit, and permanently delete your YouTube videos, ratings, comments and captions
    const YOUTUBE_FORCESSL = 'https://www.googleapis.com/auth/youtube.force-ssl';
    // View your YouTube account
    // YOUTUBE_READONLY = 'https://www.googleapis.com/auth/youtube.readonly';
    // Manage your YouTube videos
    const YOUTUBE_UPLOAD = 'https://www.googleapis.com/auth/youtube.upload';
    // View and manage your assets and associated content on YouTube
    // YOUTUBEPARTNER = 'https://www.googleapis.com/auth/youtubepartner';
    // View private information of your YouTube channel relevant during the audit process with a YouTube partner
    const YOUTUBEPARTNERCHANNELAUDIT = 'https://www.googleapis.com/auth/youtubepartner-channel-audit';

    /***** YouTube Reporting API, v1 *****/
    // View monetary and non-monetary YouTube Analytics reports for your YouTube content
    // YTANALYTICS_MONETARY_READONLY = 'https://www.googleapis.com/auth/yt-analytics-monetary.readonly';
    // View YouTube Analytics reports for your YouTube content
    // YTANALYTICS_READONLY = 'https://www.googleapis.com/auth/yt-analytics.readonly';

}